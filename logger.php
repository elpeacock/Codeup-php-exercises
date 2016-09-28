<?php

function logMessage($logLevel, $message)
{
    // todo - complete this function
    // log file name needs to change according to date YYYY-MM-DD.log
	$today = date("Y-m-d");
	$timestamp = date("H:i:s e");
	$fileToWrite = "log-{$today}.log";
	$output = "$today" . " $timestamp " . "$logLevel" . ": " . "$message" . PHP_EOL
    $handle = fopen($fileToWrite, 'a');
    fwrite ($handle, $output);
    fclose($handle);
}

function logInfo($message) {
	logMessage('INFO', $message);
}

function logError($message) {
	logMessage('ERROR', $message);
}

logInfo("You did something and it worked.");
logError("things are f#$%ed up.");
