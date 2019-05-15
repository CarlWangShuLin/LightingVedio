 <!-- DataTables -->
 <div style="margin-top: 20px;">
   <div class="card-header" style="font-size: 18px;">
     <i class="fas fa-table"></i>
     Rank list of videos</div>
   <div class="card-body">
     <div class="table-responsive">
       <div style="width:98%;">
         <table class="table table-bordered" width="100%" cellspacing="0">

           <?php
            $query  = 'SELECT * ';
            $query .= 'FROM videos ';
            $query .= 'ORDER BY vd_popularity DESC';
            $result = mysqli_query($connection, $query);
            if (!$result) {
              die('query is wrong');
            }
            ?>

           <thead>
             <tr>
               <th style="color: #cc0000;font-weight: 900;">Popularity</th>
               <th>Video ID</th>
               <th>Name</th>
               <th>Datetime</th>
               <th>Post by</th>
             </tr>
           </thead>
           <tfoot>
             <tr>
               <th style="color: #cc0000;font-weight: 900;">Popularity</th>
               <th>Video ID</th>
               <th>Name</th>
               <th>Datetime</th>
               <th>Post by</th>
             </tr>
           </tfoot>
           <tbody>

             <?php
              while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row["vd_popularity"] . "</td>";
                echo "<td>" . $row["vd_id"] . "</td>";
                echo "<td>" . $row["vd_name"] . "</td>";
                echo "<td>" . $row["vd_date"] . "</td>";
                echo "<td>" . $row["ac_id"] . "</td>";
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