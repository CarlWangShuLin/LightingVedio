<?php
require_once('../includes/db.php');

//require_once('../includes/head.php');

if (isset($_POST['submit'])) {
    $vd_id = $_POST['vd_id'];
    $vd_name = $_POST['vd_name'];
    $vd_date = $_POST['vd_date'];
    $vd_filename = $_POST['vd_file'];
    $ac_id = $_POST['ac_id'];
    
    $query  = "INSERT INTO videos (vd_id, vd_name, vd_date, vd_file, ac_id) ";
    $query .= "VALUES ('$vd_id', '$vd_name', '$vd_date', $vd_file', '$ac_id') ";

    //echo $query;
    header('Location:admin.php?page=blog_video');
    mysqli_query($connection, $query);
}


mysqli_close($connection);
?> 