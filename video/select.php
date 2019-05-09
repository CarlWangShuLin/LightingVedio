<?php
/*<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">*/
?>
<?php
$id = $_GET['id'];
$query = "SELECT vd_file FROM videos WHERE vd_id= '$id' ";
$result = mysqli_query($connection, $query); 

while($row=mysqli_fetch_array($result)){ 
        $video = $row["vd_file"];
}

?>