<?php
require_once('../includes/db.php');
require_once('../includes/tableheader.php');
?>

<div class="admin">
<a href="admin.php?page=table" class="btn btn-primary btn-icon-split">               
               <span class="text">Back</span>
               </a>

<?php
if (isset($_POST[submit])) {
    $ac_id = $_POST['ac_id'];
    $ac_name = $_POST['ac_name'];
    $ac_password = $_POST['ac_password'];
    $ac_age = $_POST['ac_age'];
    $ac_phone = $_POST['ac_phone'];
    $ac_email = $_POST['ac_email'];
    $ac_type = $_POST['ac_type'];
    
// 2. Do a query (Select all medicinal)
$query = "UPDATE accounts SET ac_id='$ac_id', ac_name='$ac_name', ac_password='$ac_password', ac_age='$ac_age', ac_phone='$ac_phone', ac_email='$ac_email', ac_type='$ac_type' ";
$query .= "WHERE ac_id= '$ac_id'";

//echo $query;
header('Location: admin.php?page=table');
mysqli_query($connection, $query);
}

?>
    
    <div style="margin:auto;">
                        <form role="form" action="updateuser.php" method="post" style="backgroud-color: white;">
                            <div class="col-lg-6" style="margin-left:25%;">
                                <div class="form-group has-success" >
                                    <label class="control-label" for="inputSuccess"> Account id </label>
                                    <input type="number" class="form-control" name="ac_id" placeholder="<?php echo 'number' ?>" required>
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label" for="inputSuccess"> Account name </label>
                                    <input type="text" class="form-control" name="ac_name" placeholder="<?php echo 'name' ?>"required>
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label" for="inputSuccess"> Account password </label>
                                    <input type="text" class="form-control" name="ac_password" placeholder="<?php echo 'password' ?>"required>
                                </div>
                                <div class="form-group has-success" >
                                    <label class="control-label" for="inputSuccess"> Age </label>
                                    <input type="number" class="form-control" name="ac_age" placeholder="<?php echo 'age' ?>"required>
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label" for="inputSuccess"> Phone </label>
                                    <input type="number" class="form-control" name="ac_phone" placeholder="<?php echo 'phone' ?>"required>
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label" for="inputSuccess"> Email </label>
                                    <input type="email" class="form-control" name="ac_email" placeholder="<?php echo 'emali' ?>"required>
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label" for="inputSuccess"> type </label>
                                    <input type="text" class="form-control" name="ac_type" placeholder="<?php echo 'type' ?>"required>
                                </div>
                                <button name="submit" class="text">Submit</button>
                            </div>
                        </form>
                        </div>

 <!-- Account table start -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">User information sheet</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    
        <!--//do a query -->
        <?php
        
        $query = "SELECT * ";
        $query .= "FROM accounts";
        
        //echo $query;
        
        $result = mysqli_query($connection, $query);
        
        if (!$result) {
            die("query is wrong");
        }
        ?>

<thead>
         <tr>
           <th>Account ID</th>
            <th>Name</th>
            <th>Password</th>
            <th>Age</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Type</th>
          </tr>
    </thead>
      <tbody>
      <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row["ac_id"] . "</td>";
            echo "<td>" . $row["ac_name"] . "</td>";
            echo "<td>" . $row["ac_password"] . "</td>";
            echo "<td>" . $row["ac_age"] . "</td>";
            echo "<td>" . $row["ac_phone"] . "</td>";
            echo "<td>" . $row["ac_email"] . "</td>";
            echo "<td>" . $row["ac_type"] . "</td>";
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



