<?php
require_once('../includes/db.php');

if (isset($_POST[submit])) {
    $ac_id = $_POST['ac_id'];
    $ac_name = $_POST['ac_name'];
    $ac_password = $_POST['ac_password'];
    $ac_age = $_POST['ac_age'];
    $ac_phone = $_POST['ac_phone'];
    $ac_email = $_POST['ac_email'];
    $ac_type = $_POST['ac_type'];
    
// 2. Do a query (Select all medicinal)
$query = "UPDATE accounts SET ac_id='$ac_id', ac_name='$ac_name', ac_password='$ac_password', ac_age='$ac_age', ac_phone='$ac_phone', ac_email='$ac_email', ac_type='$ac_type' ";
$query .= "WHERE ac_id= '$ac_id'";

//echo $query;
header('Location: admin.php?page=table');
mysqli_query($connection, $query);
}

//5. close db connection
mysqli_close($connection);

?>



