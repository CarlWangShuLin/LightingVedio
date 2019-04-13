
<?php
require_once('../includes/db.php');

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
    header('Location: b_v_table.php');
    mysqli_query($connection, $query);
}
?>
<div style="margin:auto;">
                        <form role="form" action="addbg.php" method="post" style="backgroud-color: white;">
                            <div class="col-lg-6" style="margin-left:25%;">
                                <div class="form-group has-success" >
                                    <label class="control-label" for="inputSuccess"> Blog ID </label>
                                    <input type="number" class="form-control" name="bg_id" placeholder="<?php echo 'number' ?>">
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label" for="inputSuccess"> Blog title </label>
                                    <input type="text" class="form-control" name="bg_title" placeholder="<?php echo 'title' ?>">
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label" for="inputSuccess"> Blog date </label>
                                    <input type="date" class="form-control" name="bg_date" placeholder="<?php echo 'date' ?>">
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label" for="inputSuccess"> Blog contents </label>
                                    <input type="text" class="form-control" name="bg_contents" placeholder="<?php echo 'contents' ?>">
                                </div>
                                <div class="form-group has-success" >
                                    <label class="control-label" for="inputSuccess"> Account ID </label>
                                    <input type="number" class="form-control" name="ac_id" placeholder="<?php echo 'number' ?>">
                                </div>
                                <button name="submit" class="btn">Submit</button>
                            </div>
                        </form>
                        </div>
                    
<?php

mysqli_close($connection);
?> 