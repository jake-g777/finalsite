<?php

define( 'DB_HOST', 'localhost' );
define( 'DB_DATABASE', 'imjake64_nfldata' );
define( 'DB_USER', 'imjake64_admin' );
define( 'DB_PASSWORD', 'password' );

$driver = new mysqli_driver();
$driver->report_mode = MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT;

try{
    $conn = new mysqli(DB_HOST ,DB_USER, DB_PASSWORD, DB_DATABASE);
    
} catch (mysqli_sql_exception $exception) {
    die('Connection Failed: ' . $exception->getMessage());
}

