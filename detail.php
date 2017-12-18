<?php

//var_dump($_POST);
/*
array(3) {
    ["destination"]=> string(5) "Ibiza"
    ["nb_passenger"]=> string(1) "3"
    ["insurance"]=> string(2) "on"
}
*/

require_once 'config/init.php';
require_once 'models/class.bookingConfiguration.php';

// Load datas from inputs or session
if (isset($_SESSION['booking']) && isset($_SESSION['bookingConf'])) { // case user already in a session, reload previously submitted datas
    $bookingConf = unserialize($_SESSION['bookingConf']);
    $booking = unserialize($_SESSION['booking']);
} else { // no travellers data, start cases
    if (isset($_GET['destination'])) {              // case user clicked on picture destination
        $destination = $_GET['destination'];
        $nbPassenger = 1;
        $insurance = true;
    } elseif (isset($_POST['destination'])) {       // case user used the home form
        $destination = $_POST['destination'];
        $nbPassenger = $_POST['nb_passenger'];
        $insurance = isset($_POST['insurance']) ? true : false;
    } else {                                        // case user enter the url directly ( no data in post,get or session ) : redirect to home
        header('Location: ' . WEB_DOMAIN);
        exit();
    }

    $bookingConf = new BookingConfiguration();

    $bookingConf
        ->setInsurance($insurance)
        ->setPassengers($nbPassenger)
        ->setDestination($destination);

    $booking = new Booking();

}


$travellerNum = isset($_POST['passenger_num']) ? $_POST['passenger_num']  : 0;

// passenger data submited
if (isset($_POST['detail']) && $travellerNum < $bookingConf->getPassengers()) {
    // verify if it s a data replacement in session
    
    if ($booking->isSetTravellerNum($travellerNum)) { // a traveller already exist : update him
        $traveller = $booking->getTravellerByNumber($travellerNum);
    } else // no existant data in session : create a new one
        $traveller = new Traveller();

    if (false === $traveller->setFirstname($_POST['passenger_firstname'])) {
        $error = true;
        $errorFirstname = 'please enter a valid firstname';
    }

    if (false === $traveller->setLastname($_POST['passenger_lastname'])) {
        $error = true;
        $errorLastname = 'please enter a valid lastname';
    }

    if (false === $traveller->setAge($_POST['passenger_age'])) {
        $error = true;
        $errorAge = 'please enter a valid age';
    }

    if (false === isset($error)) { // no error 
        if ($booking->isSetTravellerNum($travellerNum)) { // update after modification
            $booking->updateTraveller($traveller, $travellerNum);
        } else
            $booking->addTraveller($traveller);  // add the new one
        $travellerNum = $_POST['passenger_num'] + 1;
    } else
        $travellerNum = $_POST['passenger_num'];
}

// load next traveller data if already loaded from session
if ($booking->isSetTravellerNum($travellerNum))
    $traveller = $booking->getTravellerByNumber($travellerNum);
else
    $traveller = new Traveller();

// keep data in session
$_SESSION['bookingConf'] = serialize($bookingConf);
$_SESSION['booking'] = serialize($booking);

// if all passenger have been submit, redirect to next step : validation.php
if ($travellerNum >= $bookingConf->getPassengers()) {
    require 'validation.php';
} else { // else load the view for another passenger data form
    require 'views/detail.tpl.php';
}
