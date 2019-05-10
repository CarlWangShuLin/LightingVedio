<?php
require_once('../includes/db.php');

if (isset($_POST[submit])) {
    $vd_id = $_POST['vd_id'];
    $vd_name = $_POST['vd_name'];
    $vd_date = $_POST['vd_date'];
    $vd_filename = $_POST['vd_file'];
    $ac_id = $_POST['ac_id'];
    
// 2. Do a query (Select all medicinal)
$query = "UPDATE videos SET vd_id='$vd_id', vd_name='$vd_name', vd_date='$vd_date', vd_file='$vd_file', ac_id='$ac_id' ";
$query .= "WHERE vd_id= '$vd_id'";

//echo $query;
header('Location: admin.php?page=blog_video');
mysqli_query($connection, $query);

}

//5. close db connection
mysqli_close($connection);

?>



