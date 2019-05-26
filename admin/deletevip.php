<?php

require_once('../includes/db.php');

$vip_id = $_GET['vip_id'];  
// 2. Do a query (Select all pandas)
$query = "DELETE FROM vip ";
$query .= "WHERE vip_id  = $vip_id ";

//echo $query;
header('Location: admin.php?page=table');
mysqli_query($connection, $query);

//5. close db connection
mysqli_close($connection);

?>