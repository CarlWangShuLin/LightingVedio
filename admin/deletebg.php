<?php

require_once('../includes/db.php');

$bg_id = $_GET[bg_id];  
// 2. Do a query (Select all pandas)
$query = "DELETE FROM blogs ";
$query .= "WHERE bg_id = $bg_id";

//echo $query;
header('Location: admin.php?page=blog_video');
mysqli_query($connection, $query);

//5. close db connection
mysqli_close($connection);

?>