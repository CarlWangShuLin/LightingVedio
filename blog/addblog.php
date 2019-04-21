<?php
require_once('../includes/db.php');
require_once('../includes/logincheck.php');
date_default_timezone_set('prc');


if (isset($_POST['submit'])) {
    $bg_title = $_POST['bg_title'];
    $bg_date = date("Y-m-d");
    $bg_contents = $_POST['bg_contents'];
    
    
    
    $query  = "INSERT INTO blogs (bg_title, bg_date, bg_contents) ";
    $query .= "VALUES ('$bg_title', '$bg_date', '$bg_contents') ";

    //echo $query;
    header('Location: blogs.php');
    mysqli_query($connection, $query);
}
?>




<div style="margin:auto;">
    <form role="form" action="addblog.php" method="post" style="backgroud-color: white;">
        <div class="col-lg-6" style="margin-left:25%;">
            <div class="form-group has-success">
                <label class="control-label" for="inputSuccess"> Edit Title </label>
                <textarea rows="5" cols="100" style="font-size: 20px;" class="form-control" name="bg_title"><?php echo 'Title' ?></textarea>
            </div>
            <div class="form-group has-success">
                <label class="control-label" for="inputSuccess"> Contents </label>
                <textarea rows="5" cols="100" style="font-size: 20px;" class="form-control" name="bg_contents"><?php echo 'Contents' ?></textarea>
            </div>

            <button name="submit" class="btn">Submit</button>
        </div>
    </form>
</div>

<?php

mysqli_close($connection);

?>