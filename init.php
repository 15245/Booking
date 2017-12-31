<?php

define('DOMAIN', 'localhost:8888');

define('SCHEME', 'http');

if ($_SERVER['SERVER_PORT'] != 8888) { 	// not default web port
	define('WEB_DOMAIN', SCHEME . '://' . DOMAIN . ':' . $_SERVER['SERVER_PORT']);
} else { 								// default port
	define('WEB_DOMAIN', SCHEME . '://' . DOMAIN);
}

define('ROOT_PATH', dirname(__FILE__) . '/..');
define('VIEW_PATH', ROOT_PATH  . '/views');

define('WEB_ASSETS', WEB_DOMAIN . '/web/assets');
define('WEB_CSS', WEB_ASSETS. '/css');
define('WEB_IMAGES', WEB_ASSETS. '/images');
define('WEB_FONTS', WEB_ASSETS. '/fonts');
define('WEB_JS', WEB_ASSETS. '/js');

// need to require classes before session_start to unserialize
require_once ROOT_PATH . '/models/class.bookingConfiguration.php';
require_once ROOT_PATH . '/models/class.traveller.php';
require_once ROOT_PATH . '/models/class.booking.php';

session_start();

/*
 * Called function on Exception errors
 */
function errorHandler($errno, $errstr, $errfile, $errline) {
    throw new Exception($errstr);
}

function exceptionHandler($e) {
	echo '<pre>';
	echo 'file : ' . $e->getFile() . "\n";
	echo 'line : ' . $e->getLine() . "\n";
    exit("Error: '" . $e->getMessage() . "'\n" . print_r($e->getTraceAsString(), true));
}

set_error_handler("errorHandler");
set_exception_handler("exceptionHandler");
