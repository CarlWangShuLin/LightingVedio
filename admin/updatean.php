<?php
require_once('../includes/db.php');
require_once('../includes/tableheader.php');
?>

   <div class="admin">
   <a href="admin.php?page=an_co" class="btn btn-primary btn-icon-split">               
                  <span class="text">Back</span>
                  </a>
<?php

if (isset($_POST[submit])) {
    $an_id = $_POST['an_id'];
    $an_name = $_POST['an_name'];
    $an_contents = $_POST['an_contents'];
    $ac_id = $_POST['ac_id'];
    
// 2. Do a query (Select all medicinal)
$query = "UPDATE announcements SET an_id='$an_id', an_name='$an_name', an_contents='$an_contents', ac_id='$ac_id' ";
$query .= "WHERE an_id= '$an_id'";

//echo $query;
header('Location: admin.php?page=an_co');
mysqli_query($connection, $query);

}



?>
    
    <div style="margin:auto;">
                        <form role="form" action="updatean.php" method="post" style="backgroud-color: white;">
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

<!-- DataTales start -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Announcements information sheet</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    
        <!--//do a query -->
        <?php
        
        $query = "SELECT * ";
        $query .= "FROM Announcements";
        
        //echo $query;
        
        $result = mysqli_query($connection, $query);
        
        if (!$result) {
            die("query is wrong");
        }
        ?>

<thead>
         <tr>
           <th>Announcements ID</th>
            <th>Announcements Name</th>
            <th>Announcements contents</th>
            <th>Accounts ID</th>
          </tr>
    </thead>
      <tbody>
      <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row["an_id"] . "</td>";
            echo "<td>" . $row["an_name"] . "</td>";
            echo "<td>" . $row["an_contents"] . "</td>";
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



