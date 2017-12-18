<?php

/*
  echo '<pre>';
  var_dump($_POST);

  array(6) {
  ["passenger0_firstname"]=>
  string(3) "bob"
  ["passenger0_lastname"]=>
  string(5) "deaul"
  ["passenger0_age"]=>
  string(2) "24"
  ["passenger1_firstname"]=>
  string(4) "dfsd"
  ["passenger1_lastname"]=>
  string(4) "fdsf"
  ["passenger1_age"]=>
  string(2) "56"
}
*/
require_once 'config/init.php';
require_once 'database/db.booking.php';
require_once 'database/db.traveller.php';

// no session data : redirect to home
if (empty($_SESSION['bookingConf']) || empty($_SESSION['booking']))
    header('Location: ' . WEB_DOMAIN);

// retrieve datas saved in session
$bookingConf = unserialize($_SESSION['bookingConf']);
$booking = unserialize($_SESSION['booking']);

// register booking in database
$dbBooking = new dbBooking();
$dbBooking
    ->setNbTravellers($booking->getTravellersNumber())
    ->setPrice($booking->getPrice($bookingConf->getInsurance()))
    ->setInsurance($bookingConf->getInsurance())
    ->setDestination($bookingConf->getDestination());

if ($booking->getId())
    $dbBooking->setId($booking->getId());

$dbBooking->save();

$travellers = $booking->getTravellers();

foreach ($travellers as $traveller) {
    $dbTraveller = new dbTraveller();
    $dbTraveller
        ->setFirstname($traveller->getFirstname())
        ->setLastname($traveller->getLastname())
        ->setAge($traveller->getAge());

    $dbBooking->addTraveller($dbTraveller);
}

$dbBooking->save();

session_destroy();

// load the view
require 'views/confirmation.tpl.php';
