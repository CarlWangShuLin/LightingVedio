<?php


$query = "SELECT cm_contents FROM comments"; 
$result = mysqli_query($connection, $query); 

while($row=mysqli_fetch_array($result)){ 
        $content = $row["cm_contents"];
}
        
?>