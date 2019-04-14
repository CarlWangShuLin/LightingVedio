<?php
require_once('../includes/db.php');
require_once('../includes/tableheader.php');
?>

   <div class="admin">
   <a href="admin.php?page=blog_video" class="btn btn-primary btn-icon-split">               
                  <span class="text">Back</span>
                  </a>
<?php

if (isset($_POST[submit])) {
    $bg_id = $_POST['bg_id'];
    $bg_title = $_POST['bg_title'];
    $bg_date = $_POST['bg_date'];
    $bg_contents = $_POST['bg_contents'];
    $ac_id = $_POST['ac_id'];
    
// 2. Do a query (Select all medicinal)
$query = "UPDATE blogs SET bg_id='$bg_id', bg_title='$bg_title', bg_date='$bg_date', bg_contents='$bg_contents', ac_id='$ac_id' ";
$query .= "WHERE bg_id= '$bg_id'";

//echo $query;
header('Location: admin.php?page=blog_video');
mysqli_query($connection, $query);
}
?>
   
    <div style="margin:auto;">
                        <form role="form" action="updatebg.php" method="post" style="backgroud-color: white;">
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

    <!-- DataTales start -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Blog information sheet</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    
        <!--//do a query -->
        <?php
        
        $query = "SELECT * ";
        $query .= "FROM blogs";
        
        //echo $query;
        
        $result = mysqli_query($connection, $query);
        
        if (!$result) {
            die("query is wrong");
        }
        ?>

<thead>
         <tr>
           <th>Blogs ID</th>
            <th>Blogs Title</th>
            <th>Blogs date</th>
            <th>Blog Contents</th>
            <th>Account ID</th>
          </tr>
    </thead>
      <tbody>
      <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row["bg_id"] . "</td>";
            echo "<td>" . $row["bg_title"] . "</td>";
            echo "<td>" . $row["bg_date"] . "</td>";
            echo "<td>" . $row["bg_contents"] . "</td>";
            echo "<td>" . $row["ac_id"] . "</td>";
            echo "</tr>";
        }
         ?>         
         </tbody>   
      </table>
    </div>
  </div>
<!-- DataTales end -->
</div>
     <!-- admin end --> 
<?php
//5. close db connection
mysqli_close($connection);

?>



