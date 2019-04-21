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
    $bg_id = $_POST['bg_id'];
    $bg_title = $_POST['bg_title'];
    $bg_date = $_POST['bg_date'];
    $bg_contents = $_POST['bg_contents'];
    $ac_id = $_POST['ac_id'];


    $query  = "INSERT INTO blogs (bg_id, bg_title, bg_date, bg_contents, ac_id) ";
    $query .= "VALUES ('$bg_id', '$bg_title', '$bg_date', '$bg_contents', '$ac_id') ";

    //echo $query;
    header('Location: admin.php?page=blog_video');
    mysqli_query($connection, $query);
}
?>
<div style="margin:auto;">
                        <form role="form" action="addbg.php" method="post" style="backgroud-color: white;">
                            <div class="col-lg-6" style="margin-left:25%;">
                                <div class="form-group has-success" >
                                    <label class="control-label" for="inputSuccess"> Blog ID </label>
                                    <input type="number" class="form-control" name="bg_id" placeholder="<?php echo 'number' ?>" required>
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label" for="inputSuccess"> Blog title </label>
                                    <input type="text" class="form-control" name="bg_title" placeholder="<?php echo 'title' ?>" required>
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label" for="inputSuccess"> Blog date </label>
                                    <input type="date" class="form-control" name="bg_date" placeholder="<?php echo 'date' ?>" required>
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label" for="inputSuccess"> Blog contents </label>
                                    <input type="text" class="form-control" name="bg_contents" placeholder="<?php echo 'contents' ?>" required>
                                </div>
                                <div class="form-group has-success" >
                                    <label class="control-label" for="inputSuccess"> Account ID </label>
                                    <input type="number" class="form-control" name="ac_id" placeholder="<?php echo 'number' ?>" required>
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