<?php

// 1. Create a database connection
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "lighting_video";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);



// Test if connection is ok
if (mysqli_connect_errno()) {
    die("Database connection failed: " .
       mysqli_connect_error() .
       "(" . mysqli_connect_errno() . ")"
       );
}


?>