<?php
require_once('../includes/db.php');
require_once('../includes/tableheader.php');
?>

   <div class="admin">
   <a href="admin.php?page=an_co" class="btn btn-primary btn-icon-split">               
                  <span class="text">Back</span>
                  </a>
<?php

if (isset($_POST['submit'])) {
    $cl_id = $_POST['cl_id'];
    $cl_name = $_POST['cl_name'];
    $ac_id = $_POST['ac_id'];


    $query  = "INSERT INTO collection (cl_id, cl_name, ac_id) ";
    $query .= "VALUES ('$cl_id', '$cl_name', '$ac_id') ";

    //echo $query;
    header('Location: admin.php?page=an_co');
    mysqli_query($connection, $query);
}
?>
<div style="margin:auto;">
                        <form role="form" action="addcl.php" method="post" style="backgroud-color: white;">
                            <div class="col-lg-6" style="margin-left:25%;">
                                <div class="form-group has-success" >
                                    <label class="control-label" for="inputSuccess"> Collection ID </label>
                                    <input type="number" class="form-control" name="cl_id" placeholder="<?php echo 'number' ?>">
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label" for="inputSuccess"> Collection name </label>
                                    <input type="text" class="form-control" name="cl_name" placeholder="<?php echo 'name' ?>" required>
                                </div>                
                                <div class="form-group has-success" >
                                    <label class="control-label" for="inputSuccess"> Account ID </label>
                                    <input type="number" class="form-control" name="ac_id" placeholder="<?php echo 'age' ?>" required>
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