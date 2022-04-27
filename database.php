<?php 

$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'notes'; 

// Create connection
 $conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

//  Check coonection

if ($conn->connect_error) {
    die('Connection failed: ' .$conn->connect_error);
}

