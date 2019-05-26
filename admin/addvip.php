<?php
require_once('../includes/db.php');

if (isset($_POST['submit'])) {
    $vip_id = $_POST['vip_id'];
    $ac_id = $_POST['ac_id'];
    $date = $_POST['date'];
    $type = $_POST['type'];


    $query  = "INSERT INTO vip (vip_id, ac_id, date, type) ";
    $query .= "VALUES ('$vip_id', '$ac_id', '$date', '$type') ";

    //echo $query;
    header('Location: admin.php?page=table');
    mysqli_query($connection, $query);
}

mysqli_close($connection);
?> 