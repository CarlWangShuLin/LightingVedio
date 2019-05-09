<?php
/*<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">*/
?>
<?php
$id = $_GET['id'];
echo $id;
$query = "SELECT myfile FROM file WHERE id= '$id' "; 
$result = mysqli_query($connection, $query); 

while($row=mysqli_fetch_array($result)){ 
        $video = $row["myfile"];
}
        
?>