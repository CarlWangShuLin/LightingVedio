
<?php
require_once('../includes/db.php');

//require_once('../includes/head.php');

if (isset($_POST['submit'])) {
    $cm_id = $_POST['cm_id'];
    $ac_id = $_POST['ac_id'];


    $query  = "INSERT INTO ac_cm (ac_id, cm_id) ";
    $query .= "VALUES ('$ac_id', '$cm_id') ";

    //echo $query;
    header('Location: f_table.php');
    mysqli_query($connection, $query);
}
?>
<div style="margin:auto;">
                        <form role="form" action="addfac.php" method="post" style="backgroud-color: white;">
                            <div class="col-lg-6" style="margin-left:25%;">
                                <div class="form-group has-success" >
                                    <label class="control-label" for="inputSuccess"> Account ID </label>
                                    <input type="number" class="form-control" name="ac_id" placeholder="<?php echo 'number' ?>">
                                </div>    
                                <div class="form-group has-success" >
                                    <label class="control-label" for="inputSuccess"> Comment ID </label>
                                    <input type="number" class="form-control" name="cm_id" placeholder="<?php echo 'number' ?>">
                                </div>
                                <button name="submit" class="btn">Submit</button>
                            </div>
                        </form>
                        </div>
                    
<?php

mysqli_close($connection);
?> 