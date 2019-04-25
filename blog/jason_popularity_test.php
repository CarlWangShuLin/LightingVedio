<?php
require_once('../includes/db.php');
?>

<?php
$bg_id = $_GET[bg_id];
$query  = "UPDATE blogs ";
$query .= "SET bg_popularity=bg_popularity+1 ";
$query .= "WHERE bg_id = $bg_id";
mysqli_query($connection, $query);
echo $query;
?>


test_blogs.php?bg_id=". $row['bg_id'] . "