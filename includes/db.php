<?php

// 1. Create a database connection
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "2201613130119ead";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);



// Test if connection is ok
if (mysqli_connect_errno()) {
    die("Database connection failed: " .
       mysqli_connect_error() .
       "(" . mysqli_connect_errno() . ")"
       );
}


?>