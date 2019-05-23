 <!-- DataTables -->
 <div style="margin-top: 20px;">
   <div class="card-header" style="font-size: 18px;">
     <i class="fas fa-table"></i>
     Rank list of videos</div>
   <div class="card-body">
     <div class="table-responsive">
       <div style="width:98%;">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

           <?php
            $queryr  = 'SELECT COUNT(a.pop_id) as popularity, b.vd_id, b.vd_name, b.vd_date ';
            $queryr .= 'FROM popularity a, videos b ';
            $queryr .= 'WHERE a.vd_id = b.vd_id GROUP BY vd_id ';
            $queryr .= 'ORDER BY COUNT(a.pop_id) DESC';
            $resultr = mysqli_query($connection, $queryr);
            //echo $queryr;
            if (!$resultr) {
              die('query is wrong');
            }
            ?>

           <thead>
             <tr>
               <th style="color: #cc0000;font-weight: 900;">Popularity</th>
               <th>Video ID</th>
               <th>Name</th>
               <th>Datetime</th>
             </tr>
           </thead>
           <tfoot>
             <tr>
               <th style="color: #cc0000;font-weight: 900;">Popularity</th>
               <th>Video ID</th>
               <th>Name</th>
               <th>Datetime</th>
             </tr>
           </tfoot>
           <tbody>

             <?php
              while ($row = mysqli_fetch_array($resultr)) {
                echo "<tr>";
                echo "<td>" . $row["popularity"] . "</td>";
                echo "<td>" . $row["vd_id"] . "</td>";
                echo "<td>" . $row["vd_name"] . "</td>";
                echo "<td>" . $row["vd_date"] . "</td>";
                echo "</tr>";
              }
              ?>
           </tbody>
         </table>
       </div>
     </div>
   </div>
 </div>

 <!-- Bootstrap core JavaScript-->
 <script src="../vendor/jquery/jquery.min.js"></script>
 <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Page level plugin JavaScript-->
 <script src="../vendor/datatables/jquery.dataTables.js"></script>
 <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="../js/sb-admin.min.js"></script>

 <!-- Demo scripts for this page-->
 <script src="../js/demo/datatables-demo.js"></script>