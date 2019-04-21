<?php
require_once('../includes/db.php');
require_once('../includes/tableheader.php');
?>

   <div class="admin">
   <a href="admin.php?page=blog_video" class="btn btn-primary btn-icon-split">               
                  <span class="text">Back</span>
                  </a>
<?php
//require_once('../includes/head.php');

if (isset($_POST['submit'])) {
    $vd_id = $_POST['vd_id'];
    $vd_name = $_POST['vd_name'];
    $vd_classification = $_POST['vd_classification'];
    
    $query  = "INSERT INTO videos (vd_id, vd_name, vd_classification) ";
    $query .= "VALUES ('$vd_id', '$vd_name', '$vd_classification') ";

    //echo $query;
    header('Location:admin.php?page=blog_video');
    mysqli_query($connection, $query);
}
?>
<div style="margin:auto;">
  <form role="form" action="addvd.php" method="post" style="backgroud-color: white;">
<div class="col-lg-6" style="margin-left:25%;">
<div class="form-group has-success" >
        <label class="control-label" for="inputSuccess"> Video id </label>
        <input type="number" class="form-control" name="vd_id" placeholder="<?php echo 'number' ?>" required>
        </div>
<div class="form-group has-success">
        <label class="control-label" for="inputSuccess"> Video name </label>
        <input type="text" class="form-control" name="vd_name" placeholder="<?php echo 'name' ?>" required>
        </div>
<div class="form-group has-success">
        <label class="control-label" for="inputSuccess"> Video classification </label>
        <input type="text" class="form-control" name="vd_classification" placeholder="<?php echo 'classification' ?>" required>
        </div>
<button name="submit" class="text">Submit</button>
         </div>
          </form>
          </div>
          
</div>
     <!-- admin end -->                     
<?php

mysqli_close($connection);
?> 