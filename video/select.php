<?php


$query = "SELECT myfile FROM file WHERE id=1 "; 
$result = mysqli_query($connection, $query); 

while($row=mysqli_fetch_array($result)){ 
        $video = $row["myfile"];
}
        
?>