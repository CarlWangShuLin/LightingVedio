<?php
require_once('../includes/db.php');
require_once('../includes/logincheck.php');
date_default_timezone_set('prc');


if (isset($_POST['submit'])) {
    $bg_title = $_POST['bg_title'];
    $bg_date = Date('y-m-d H:i:s',time());
    $bg_contents = $_POST['bg_contents'];
    $aid= $_SESSION['login_id'];
    
    
    $query  = "INSERT INTO blogs (bg_title, bg_date, bg_contents, ac_id) ";
    $query .= "VALUES ('$bg_title', '$bg_date', '$bg_contents', '$aid') ";

    //echo $query;
    header('Location: blogs.php');
    mysqli_query($connection, $query);
}


mysqli_close($connection);

?>