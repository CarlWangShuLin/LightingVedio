<?php

require_once('../includes/db.php');

$an_id = $_GET[an_id];  
// 2. Do a query (Select all pandas)
$query = "DELETE FROM announcements ";
$query .= "WHERE an_id = $an_id";

//echo $query;
header('Location: admin.php?page=an_co');
mysqli_query($connection, $query);

//5. close db connection
mysqli_close($connection);

?>