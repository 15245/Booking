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

// no session data : redirect to home
if (empty($_SESSION['bookingConf']))
    header('Location: ' . WEB_DOMAIN);

// retrieve booking data saved in session as their are needed in the validation view
$booking = unserialize($_SESSION['booking']);
$bookingConf = unserialize($_SESSION['bookingConf']);

// call view
require_once 'views/validation.tpl.php';
