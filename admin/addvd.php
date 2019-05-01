<?php
require_once('../includes/db.php');

//require_once('../includes/head.php');

if (isset($_POST['submit'])) {
    $vd_id = $_POST['vd_id'];
    $vd_name = $_POST['vd_name'];
    $vd_classification = $_POST['vd_classification'];
    
    $query  = "INSERT INTO videos (vd_id, vd_name, vd_classification) ";
    $query .= "VALUES ('$vd_id', '$vd_name', '$vd_classification') ";

    //echo $query;
    header('Location:admin.php?page=blog_video');
    mysqli_query($connection, $query);
}


mysqli_close($connection);
?> 