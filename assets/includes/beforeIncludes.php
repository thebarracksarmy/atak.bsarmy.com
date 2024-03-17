<?php
// Set HTTP headers 
header("Cache-Control: max-age=604800, must-revalidate");
header('Content-Type: text/html; charset=utf-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
header('X-XSS-Protection: 1; mode=block');
header('Referrer-Policy: no-referrer-when-downgrade');
header('Feature-Policy: accelerometer \'none\'; camera \'none\'; geolocation \'none\'; gyroscope \'none\'; magnetometer \'none\'; microphone \'none\'; payment \'none\'; usb \'none\'');
header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');
header('Server: None-of-your-business server (v1.0), -22GB RAM, 15PB eMMC storage, 15GHz 13-core CPU, 69PB/s bandwidth');


$cacheVersion = "prod";


if ($debug = true) {
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
} else {
	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0);
	error_reporting(0);
}
