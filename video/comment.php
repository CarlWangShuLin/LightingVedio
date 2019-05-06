<?php


$query = "SELECT cm_contents FROM comments WHERE cm_id=1 "; 
$result = mysqli_query($connection, $query); 

while($row=mysqli_fetch_array($result)){ 
        $content = $row["cm_contents"];
}
        
?>