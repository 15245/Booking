<?php

require_once 'config/init.php';

// no session data : redirect to home
if (empty($_SESSION['bookingConf']))
    header('Location: ' . WEB_DOMAIN);

// retrieve booking data saved in session as their are needed in the validation view
$booking = unserialize($_SESSION['booking']);
$bookingConf = unserialize($_SESSION['bookingConf']);

$destination = $bookingConf->getDestination();

// call view
require_once 'views/validation.tpl.php';