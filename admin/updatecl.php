<?php
require_once('../includes/db.php');
require_once('../includes/head.php');
require_once('../includes/adminhead.php');
?>

   <div class="admin">
   <a href="admin.php?page=an_co" class="btn btn-primary btn-icon-split">               
                  <span class="text">Back</span>
                  </a>
<?php

if (isset($_POST[submit])) {
    $cl_id = $_POST['cl_id'];
    $cl_name = $_POST['cl_name'];
    $ac_id = $_POST['ac_id'];
    
// 2. Do a query (Select all medicinal)
$query = "UPDATE collection SET cl_id='$cl_id', cl_name='$cl_name', ac_id='$ac_id' ";
$query .= "WHERE cl_id= '$cl_id'";

//echo $query;
header('Location: admin.php?page=an_co');
mysqli_query($connection, $query);

}



?>
    
    <div style="margin:auto;">
                        <form role="form" action="updatecl.php" method="post" style="backgroud-color: white;">
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

<!-- DataTales start -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Collection information sheet</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    
        <!--//do a query -->
        <?php
        
        $query = "SELECT * ";
        $query .= "FROM collection";
        
        //echo $query;
        
        $result = mysqli_query($connection, $query);
        
        if (!$result) {
            die("query is wrong");
        }
        ?>
<thead>
         <tr>
           <th>Collection ID</th>
            <th>Collection Name</th>
            <th>Accounts ID</th>
          </tr>
    </thead>
      <tbody>
      <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row["cl_id"] . "</td>";
            echo "<td>" . $row["cl_name"] . "</td>";
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



