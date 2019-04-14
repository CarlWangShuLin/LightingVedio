 <!-- DataTables -->
 <div style="margin-top: 20px;">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Rank list of videos</div>
            <div class="card-body">
              <div class="table-responsive">
              <div style="width:98%;"> 
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

 <?php
$query  = 'SELECT * ';
$query .= 'FROM videos';
$result = mysqli_query($connection, $query);
if (!$result) {
    die('query is wrong');
}
?>

                <thead>
                    <tr>
                      <th>Video ID</th>
                      <th>Name</th>
                      <th>Classification</th>
                      <th>Collection</th>
                      <th>payback volume</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>Video ID</th>
                      <th>Name</th>
                      <th>Classification</th>
                      <th>Collection</th>
                      <th>payback volume</th>
                    </tr>
                  </tfoot>
                  <tbody>

<?php

while ($row = mysqli_fetch_array($result)) {
    echo"<tr>";
    echo"<td>" . $row["vd_id"] . "</td>";
    echo"<td>" . $row["vd_name"] . "</td>";
    echo"<td>" . $row["vd_classification"] . "</td>";
    echo"<td>" . $row[""] . "</td>";
    echo"<td>" . $row[""] . "</td>";
    echo"</tr>";
}
?>
                  </tbody>
                </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>