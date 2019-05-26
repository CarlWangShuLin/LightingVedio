<?php
require_once('../includes/db.php');

if (isset($_POST[submit])) {
    $vip_id = $_POST['vip_id'];
    $ac_id = $_POST['ac_id'];
    $date = $_POST['date'];
    $type = $_POST['type'];
    
// 2. Do a query (Select all medicinal)
$query = "UPDATE vip SET vip_id='$vip_id', ac_id='$ac_id', date='$date', type='$type' ";
$query .= "WHERE vip_id= '$vip_id'";

//echo $query;
header('Location: admin.php?page=table');
mysqli_query($connection, $query);
}

//5. close db connection
mysqli_close($connection);

?>



