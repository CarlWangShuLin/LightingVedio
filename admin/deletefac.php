<?php

require_once('../includes/db.php');

$ac_id = $_GET[ac_id];  
// 2. Do a query (Select all pandas)
$query = "DELETE FROM ac_cm ";
$query .= "WHERE ac_id = $ac_id";

//echo $query;
header('Location: admin.php?page=function');
mysqli_query($connection, $query);

//5. close db connection
mysqli_close($connection);

?>