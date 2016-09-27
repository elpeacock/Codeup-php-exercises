<?php
//define constants
const DB_HOST = '127.0.0.1';
const DB_NAME = 'employees';
const DB_USER = 'codeup';
const DB_PASS = 'delilah834';

//require db connect
require 'db_connect.php';

//echo connection status
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";