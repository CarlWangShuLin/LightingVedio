<?php

require_once('../includes/db.php');

$cm_id = $_GET[cm_id];  
// 2. Do a query (Select all pandas)
$query = "DELETE FROM comments ";
$query .= "WHERE cm_id = $cm_id";

//echo $query;
header('Location: admin.php?page=table');
mysqli_query($connection, $query);

//5. close db connection
mysqli_close($connection);

?>