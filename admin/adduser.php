<?php
require_once('../includes/db.php');
//require_once('../includes/head.php');

if (isset($_POST['submit'])) {
    $ac_id = $_POST['ac_id'];
    $ac_name = $_POST['ac_name'];
    $ac_password = $_POST['ac_password'];
    $ac_age = $_POST['ac_age'];
    $ac_phone = $_POST['ac_phone'];
    $ac_email = $_POST['ac_email'];
    $ac_type = $_POST['ac_type'];

    $query  = "INSERT INTO accounts (ac_id, ac_name, ac_password, ac_age, ac_phone, ac_email, ac_type) ";
    $query .= "VALUES ('$ac_id', '$ac_name', '$ac_password', '$ac_age', '$ac_phone', '$ac_email', '$ac_type') ";

    //echo $query;
    header('Location: admin.php?page=table');
    mysqli_query($connection, $query);
}


mysqli_close($connection);
?> 