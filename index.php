<?php

require_once '../config/init.php';

require_once ROOT_PATH . '/database/db.bookings.php';
require_once ROOT_PATH . '/models/class.booking.php';
require_once ROOT_PATH . '/models/class.bookingConfiguration.php';

// action required
if (isset($_GET['action'])) {

	if ($_GET['action'] == "edit") {
		if (empty($_GET['id']) || false === is_numeric($_GET['id'])) {
			$error = "parameter id missing or incorrect";
			return;
		}

		// load data from database
		$dbBooking = new dbBooking();
		$dbBooking->load($_GET['id']);

		$bookingConf = new bookingConfiguration();
		$bookingConf
			->setDestination($dbBooking->getDestination())
			->setPassengers($dbBooking->getNbTravellers())
			->setInsurance($dbBooking->isInsurance());

		$booking = new booking();
		$booking->setId($_GET['id']);
		$dbTravellers = $dbBooking->getTravellers();

		foreach ($dbTravellers as $dbTraveller) {
			$traveller = new traveller();
			$traveller
				->setAge($dbTraveller->getAge())
				->setFirstname($dbTraveller->getFirstname())
				->setLastname($dbTraveller->getLastname());

			$booking->addTraveller($traveller);
		}

		// put data of the booking in session 
		$_SESSION['bookingConf'] = serialize($bookingConf);
		$_SESSION['booking'] = serialize($booking);

		// all data loaded in session, redirect to edit page (detail.php)
		header('Location:' . WEB_DOMAIN . '/detail.php');
		exit();
	}
	elseif ($_GET['action'] == 'delete') {
		$dbBooking = new dbBooking();
		$dbBooking->delete($_GET['id']);
		$message = "delete of booking id : '" . $_GET['id'] . "'' done";
	} else {
		$error = "Unrecognized action";
	}

}

$bookings = new dbBookings();
$bookings->load();

// load admin view
require_once '../views/admin.tpl.php';
