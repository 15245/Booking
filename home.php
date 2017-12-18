<?php

require_once 'config/init.php';

// load booking models
require_once ROOT_PATH . '/models/class.booking.php';

$booking = new BookingConfiguration();

// call the view
require VIEW_PATH . '/home.tpl.php';
