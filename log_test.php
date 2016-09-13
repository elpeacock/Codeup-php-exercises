<?php
//set timezone default
date_default_timezone_set('America/Chicago');

//include 'Log.php'
require_once 'Log.php';

//create an instance of Log class
$logger = new Log('cli');

// //make today accessible
// $today = date('Y-m-d');

// //set filename property
// $logger->filename = "log-{$today}.log";

$logger->info("You did something and it worked.");
$logger->error("things are fucked up.");

