<?php
require_once('../includes/db.php');
//require_once('../includes/head.php');

$id = $_GET['bg_id'];

// 2. Do a query (update information)
$query = "DELETE FROM blogs ";
$query .= "WHERE bg_id = $id";

//echo $query;
header('Location: blogs.php');
mysqli_query($connection, $query);


// 5. close db connection
mysqli_close($connection);
