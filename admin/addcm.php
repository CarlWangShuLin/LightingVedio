
<?php
require_once('../includes/db.php');

//require_once('../includes/head.php');

if (isset($_POST['submit'])) {
    $cm_id = $_POST['cm_id'];
    $cm_name = $_POST['cm_name'];
    $cm_contents = $_POST['cm_contents'];
    
    $query  = "INSERT INTO comments (cm_id, cm_name, cm_contents) ";
    $query .= "VALUES ('$cm_id', '$cm_name', '$cm_contents') ";

    //echo $query;
    header('Location: table.php');
    mysqli_query($connection, $query);
}
?>
<div style="margin:auto;">
  <form role="form" action="addcm.php" method="post" style="backgroud-color: white;">
<div class="col-lg-6" style="margin-left:25%;">
<div class="form-group has-success" >
        <label class="control-label" for="inputSuccess"> Comment id </label>
        <input type="number" class="form-control" name="cm_id" placeholder="<?php echo 'number' ?>">
        </div>
<div class="form-group has-success">
        <label class="control-label" for="inputSuccess"> Comment name </label>
        <input type="text" class="form-control" name="cm_name" placeholder="<?php echo 'name' ?>">
        </div>
<div class="form-group has-success">
        <label class="control-label" for="inputSuccess"> Comment contents </label>
        <input type="text" class="form-control" name="cm_contents" placeholder="<?php echo 'contents' ?>">
        </div>
<button name="submit" class="btn">Submit</button>
         </div>
          </form>
          </div>
                    
<?php

mysqli_close($connection);
?> 