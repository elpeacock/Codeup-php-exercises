<?php
//set timezone default
date_default_timezone_set('America/Chicago');

//create 'Log' class
class Log 
{
    //create '$filename' property
    public $filename;

    //declare variable to access date
    // public $today;

    //create method to logMessage
    public function logMessage($logLevel, $message) {
        $today = date("Y-m-d");
        $timestamp = date("H:i:s e");
        $output = "$today" . " $timestamp " . "$logLevel" . ": " . "$message" . PHP_EOL;
        $handle = fopen($this->filename, 'a');
        fwrite ($handle, $output);
        fclose($handle);
    }

    //create method to log info message
    public function info($message) {
        $this->logMessage('INFO', $message);
    }

    //create method to log error message
    public function error($message) {
        $this->logMessage('ERROR', $message);
    }
}