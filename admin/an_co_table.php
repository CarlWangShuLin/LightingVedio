<?php
require_once('../includes/db.php');
require_once('../includes/head.php');
require_once('../includes/adminhead.php');
?>


<html lang="en">
<link href="css/button.css" rel="stylesheet">
<head>

<title> Table page </title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

</head>

<body>

        <!-- Content Section -->
        <div id="content_sec">
<!-- DataTales start -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Announcements information sheet</h6>
    <!-- button start -->
    <button data-toggle="modal" data-target="#addan">Add Announcements</button>       
    <!-- button end-->
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
            <th>Update</th>
            <th>Delete</th>
          </tr>
    </thead>
      <tbody>
      <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row["an_id"] . "</td>";
            echo "<td>" . $row["an_name"] . "</td>";
            echo "<td>" . $row["an_contents"] . "</td>";
            echo "<td><button data-toggle='modal' data-target='#updatean'>update</buttone></td>";
            echo "<td><a class='text' href='deletean.php?an_id=" . $row["an_id"] . "'>delete</a></td>";            
            echo "</tr>";
        }
         ?>         
         </tbody>   
      </table>
    </div>
  </div>
<!-- DataTales end -->
<!-- add pop-up start -->
<div class="container">
                <form method="post" action="addan.php" class="form-horizontal" role="form" id="myForm" onsubmit="return ">
                    <div class="modal fade" id="addan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <!--  定义模态框，过渡效果为淡入，id为myModal,tabindex=-1可以禁用使用tab切换，aria-labelledby用于引用模态框的标题，aria-hidden=true保持模态框在触发前窗口不可见  -->
                        <div class="modal-dialog">
                            <!--  显示模态框对话框型（若不写下一个div则没有颜色）  -->
                            <div class="modal-content">
                                <!--  显示模态框白色背景，所有内容都写在这个div里面  -->

                                <div class="btn-info modal-header">
                                    <h4>Write Announcement</h4>
                                    <!--  模态框标题模  -->
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <!--  关闭按钮  -->
                                </div>
                                <div class="modal-body">
                                    <!--  模态框内容，我在此处添加一个表单 -->
                                    <form class="form-horizontal" role="form">
                                    
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
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <!--  模态框底部样式，一般是提交或者确定按钮 -->
                                    <button type="submit" name="submit" class="btn btn-info">Submit</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div>
                    </div> <!-- /.modal -->
                </form>              
      </div>
<!-- add pop-up end -->
<!-- update pop-up start -->
<div class="container">
                <form method="post" action="updatean.php" class="form-horizontal" role="form" id="myForm" onsubmit="return ">
                    <div class="modal fade" id="updatean" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <!--  定义模态框，过渡效果为淡入，id为myModal,tabindex=-1可以禁用使用tab切换，aria-labelledby用于引用模态框的标题，aria-hidden=true保持模态框在触发前窗口不可见  -->
                        <div class="modal-dialog">
                            <!--  显示模态框对话框型（若不写下一个div则没有颜色）  -->
                            <div class="modal-content">
                                <!--  显示模态框白色背景，所有内容都写在这个div里面  -->

                                <div class="btn-info modal-header">
                                    <h4>Update Announcement</h4>
                                    <!--  模态框标题模  -->
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <!--  关闭按钮  -->
                                </div>
                                <div class="modal-body">
                                    <!--  模态框内容，我在此处添加一个表单 -->
                                    <form class="form-horizontal" role="form">
                                    
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

                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <!--  模态框底部样式，一般是提交或者确定按钮 -->
                                    <button type="submit" name="submit" class="btn btn-info">Submit</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div>
                    </div> <!-- /.modal -->
                </form>              
      </div>
<!-- update pop-up end --> 
</div>
<!-- conten end -->