<?php
require_once('db.php');
?>

        <?php

        $query = "select myfile from file where id=1 "; 

        $result = mysqli_query($connection, $query); 

        while($row=mysqli_fetch_array($result)){ 
                 $video = $row["myfile"];
}
        
?>
<video id="myVideo" width="320" height="240" controls>
  <source src="<?php echo $video ?>" type="video/mp4">
</video>
