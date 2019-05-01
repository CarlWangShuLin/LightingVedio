<?php
require_once('../includes/db.php');

if (isset($_POST[submit])) {
    $cm_id = $_POST['cm_id'];
    $ac_id = $_POST['ac_id'];
    
// 2. Do a query (Select all medicinal)
$query = "UPDATE ac_cm SET ac_id='$ac_id', cm_id='$cm_id' ";
$query .= "WHERE ac_id= '$ac_id'";

//echo $query;
header('Location: admin.php?page=function');
mysqli_query($connection, $query);

}

//5. close db connection
mysqli_close($connection);

?>



