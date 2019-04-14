<?php
require_once('../includes/db.php');
require_once('../includes/tableheader.php');
?>

   <div class="admin">
   <a href="table.php" class="btn btn-primary btn-icon-split">               
                  <span class="text">Back</span>
                  </a>
<?php
//require_once('../includes/head.php');

if (isset($_POST[submit])) {
    $cm_id = $_POST['cm_id'];
    $cm_name = $_POST['cm_name'];
    $cm_contents = $_POST['cm_contents'];
    
// 2. Do a query (Select all medicinal)
$query = "UPDATE comments SET cm_id='$cm_id', cm_name='$cm_name', cm_contents='$cm_contents' ";
$query .= "WHERE cm_id= '$cm_id'";

//echo $query;
header('Location: table.php');
mysqli_query($connection, $query);

}



?>
    
    <div style="margin:auto;">
  <form role="form" action="updatecm.php" method="post" style="backgroud-color: white;">
<div class="col-lg-6" style="margin-left:25%;">
<div class="form-group has-success" >
        <label class="control-label" for="inputSuccess"> Comment id </label>
        <input type="number" class="form-control" name="cm_id" placeholder="<?php echo 'number' ?>" required>
        </div>
<div class="form-group has-success">
        <label class="control-label" for="inputSuccess"> Comment name </label>
        <input type="text" class="form-control" name="cm_name" placeholder="<?php echo 'name' ?>" required>
        </div>
<div class="form-group has-success">
        <label class="control-label" for="inputSuccess"> Comment contents </label>
        <input type="text" class="form-control" name="cm_contents" placeholder="<?php echo 'contents' ?>" required>
        </div>
<button name="submit" class="text">Submit</button>
         </div>
          </form>
          </div>
     <!-- admin end --> 

     <!-- DataTales start -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Comments information sheet</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    
      <!--//do a query -->
      <?php
        
        $query = "SELECT * ";
        $query .= "FROM comments";
        
        //echo $query;
        
        $result = mysqli_query($connection, $query);
        
        if (!$result) {
            die("query is wrong");
        }
        ?>
<thead>
         <tr>
           <th>Comments ID</th>
            <th>Name</th>
            <th>Content</th>
          </tr>
    </thead>
      <tbody>
      <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row["cm_id"] . "</td>";
            echo "<td>" . $row["cm_name"] . "</td>";
            echo "<td>" . $row["cm_contents"] . "</td>";
            echo "</tr>";
        }
         ?>         
         </tbody>    
      </table>
    </div>
  </div>
<!-- DataTales end --> 
<?php
//5. close db connection
mysqli_close($connection);

?>



