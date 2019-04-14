
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
    $an_id = $_POST['an_id'];
    $an_name = $_POST['an_name'];
    $an_contents = $_POST['an_contents'];
    $ac_id = $_POST['ac_id'];


    $query  = "INSERT INTO announcements (an_id, an_name, an_contents, ac_id) ";
    $query .= "VALUES ('$an_id', '$an_name', '$an_contents', '$ac_id') ";

    //echo $query;
    header('Location: admin.php?page=an_co');
    mysqli_query($connection, $query);
}
?>
<div style="margin:auto;">
                        <form role="form" action="addan.php" method="post" style="backgroud-color: white;">
                            <div class="col-lg-6" style="margin-left:25%;">
                                <div class="form-group has-success" >
                                    <label class="control-label" for="inputSuccess"> Announcement ID </label>
                                    <input type="number" class="form-control" name="an_id" placeholder="<?php echo 'number' ?>">
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label" for="inputSuccess"> Announcement name </label>
                                    <input type="text" class="form-control" name="an_name" placeholder="<?php echo 'name' ?>" required> 
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label" for="inputSuccess"> Announcement contents </label>
                                    <input type="text" class="form-control" name="an_contents" placeholder="<?php echo 'contents' ?>" required>
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