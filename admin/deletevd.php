<?php

require_once('../includes/db.php');

$vd_id = $_GET[vd_id];  
// 2. Do a query (Select all pandas)
$query = "DELETE FROM videos ";
$query .= "WHERE vd_id = $vd_id";

//echo $query;
header('Location: admin.php?page=blog_video');
mysqli_query($connection, $query);

//5. close db connection
mysqli_close($connection);

?>