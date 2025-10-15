<?php

$host = "localhost";  // Database server
$username = "root";   // DB username
$password = "walabalo"; // DB password
$dbname = "myapp";  // Database name


// Create database connection
$connection = new mysqli($host, $username, $password, $dbname);


// Stop script if connection fails
if ($connection->connect_error) {
  die('Database connection failed: ' . $connection->connect_error);
}

// $connection is now used for all CRUD operations in my controllers