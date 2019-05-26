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
        <!-- Account table start -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">User information sheet</h6>
                <!-- button start -->
                <button data-toggle="modal" data-target="#adduser">Add User</button>
                <!-- button end-->
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
                                <th>Update</th>
                                <th>Delete</th>
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
                                echo "<td><button data-toggle='modal' data-target='#updateuser'>update</buttone></td>";
                                echo "<td><a class='text' href='deleteuser.php?ac_id=" . $row["ac_id"] . "'>delete</a></td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- DataTales end -->
        <!-- add pop-up start -->
        <div class="container">
            <form method="post" action="adduser.php" class="form-horizontal" role="form" id="myForm" onsubmit="return ">
                <div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <!--  定义模态框，过渡效果为淡入，id为myModal,tabindex=-1可以禁用使用tab切换，aria-labelledby用于引用模态框的标题，aria-hidden=true保持模态框在触发前窗口不可见  -->
                    <div class="modal-dialog">
                        <!--  显示模态框对话框型（若不写下一个div则没有颜色）  -->
                        <div class="modal-content">
                            <!--  显示模态框白色背景，所有内容都写在这个div里面  -->

                            <div class="btn-info modal-header">
                                <h4>Add Account</h4>
                                <!--  模态框标题模  -->
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <!--  关闭按钮  -->
                            </div>
                            <div class="modal-body">
                                <!--  模态框内容，我在此处添加一个表单 -->
                                <form class="form-horizontal" role="form">

                                    <div class="form-group has-success">
                                        <label class="control-label" for="inputSuccess"> Account id </label>
                                        <input type="number" class="form-control" name="ac_id" placeholder="<?php echo 'number' ?>" required>
                                    </div>
                                    <div class="form-group has-success">
                                        <label class="control-label" for="inputSuccess"> Account name </label>
                                        <input type="text" class="form-control" name="ac_name" placeholder="<?php echo 'name' ?>" required>
                                    </div>
                                    <div class="form-group has-success">
                                        <label class="control-label" for="inputSuccess"> Account password </label>
                                        <input type="text" class="form-control" name="ac_password" placeholder="<?php echo 'password' ?>" required>
                                    </div>
                                    <div class="form-group has-success">
                                        <label class="control-label" for="inputSuccess"> Age </label>
                                        <input type="number" class="form-control" name="ac_age" placeholder="<?php echo 'age' ?>" required>
                                    </div>
                                    <div class="form-group has-success">
                                        <label class="control-label" for="inputSuccess"> Phone </label>
                                        <input type="number" class="form-control" name="ac_phone" placeholder="<?php echo 'phone' ?>" required>
                                    </div>
                                    <div class="form-group has-success">
                                        <label class="control-label" for="inputSuccess"> Email </label>
                                        <input type="email" class="form-control" name="ac_email" placeholder="<?php echo 'emali' ?>" required>
                                    </div>
                                    <div class="form-group has-success">
                                        <label class="control-label" for="inputSuccess"> type </label>
                                        <input type="text" class="form-control" name="ac_type" placeholder="<?php echo 'type' ?>" required>
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
            <form method="post" action="updateuser.php" class="form-horizontal" role="form" id="myForm1" onsubmit="return">
                <div class="modal fade" id="updateuser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <!--  定义模态框，过渡效果为淡入，id为myModal,tabindex=-1可以禁用使用tab切换，aria-labelledby用于引用模态框的标题，aria-hidden=true保持模态框在触发前窗口不可见  -->
                    <div class="modal-dialog">
                        <!--  显示模态框对话框模型（若不写下一个div则没有颜色）  -->
                        <div class="modal-content">
                            <!--  显示模态框白色背景，所有内容都写在这个div里面  -->
                            <div class="btn-info modal-header">
                                <h4>Update Account</h4>
                                <!--  模态框标题  -->
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <!--  关闭按钮  -->
                            </div>
                            <div class="modal-body">
                                <!--  模态框内容，我在此处添加一个表单 -->
                                <form class="form-horizontal" role="form">
                                    <div class="form-group has-success">
                                        <label class="control-label" for="inputSuccess"> Account id </label>
                                        <input type="number" class="form-control" name="ac_id" placeholder="<?php echo 'number' ?>" required>
                                    </div>
                                    <div class="form-group has-success">
                                        <label class="control-label" for="inputSuccess"> Account name </label>
                                        <input type="text" class="form-control" name="ac_name" placeholder="<?php echo 'name' ?>" required>
                                    </div>
                                    <div class="form-group has-success">
                                        <label class="control-label" for="inputSuccess"> Account password </label>
                                        <input type="text" class="form-control" name="ac_password" placeholder="<?php echo 'password' ?>" required>
                                    </div>
                                    <div class="form-group has-success">
                                        <label class="control-label" for="inputSuccess"> Age </label>
                                        <input type="number" class="form-control" name="ac_age" placeholder="<?php echo 'age' ?>" required>
                                    </div>
                                    <div class="form-group has-success">
                                        <label class="control-label" for="inputSuccess"> Phone </label>
                                        <input type="number" class="form-control" name="ac_phone" placeholder="<?php echo 'phone' ?>" required>
                                    </div>
                                    <div class="form-group has-success">
                                        <label class="control-label" for="inputSuccess"> Email </label>
                                        <input type="email" class="form-control" name="ac_email" placeholder="<?php echo 'emali' ?>" required>
                                    </div>
                                    <div class="form-group has-success">
                                        <label class="control-label" for="inputSuccess"> type </label>
                                        <input type="text" class="form-control" name="ac_type" placeholder="<?php echo 'type' ?>" required>
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

        <!-- Comments table start -->
        <div class="table">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <!-- /.panel-heading -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">VIP sheet</h6>
                        <!-- button start -->
                        <button data-toggle="modal" data-target="#addvip">Add VIP</button>
                        <!-- button end-->
                    </div>
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">

                            <!--//do a query -->
                            <?php

                            $query = "SELECT * ";
                            $query .= "FROM vip";

                            //echo $query;

                            $result = mysqli_query($connection, $query);

                            if (!$result) {
                                die("query is wrong");
                            }
                            ?>
                            <thead>
                                <tr>
                                    <th>Vip ID</th>
                                    <th>Account ID</th>
                                    <th>Date</th>
                                    <th>Type</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row["vip_id"] . "</td>";
                                    echo "<td>" . $row["ac_id"] . "</td>";                                   
                                    echo "<td>" . $row["date"] . "</td>";
                                    echo "<td>" . $row["type"] . "</td>";
                                    echo "<td><button data-toggle='modal' data-target='#updatevip'>update</buttone></td>";
                                    echo "<td><a class='text' href='deletevip.php?vip_id=" . $row["vip_id"] . "'>delete</a></td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- DataTales end -->
            <!-- add pop-up start -->
            <div class="container">
                <form method="post" action="addvip.php" class="form-horizontal" role="form" id="myForm" onsubmit="return ">
                    <div class="modal fade" id="addvip" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <!--  定义模态框，过渡效果为淡入，id为myModal,tabindex=-1可以禁用使用tab切换，aria-labelledby用于引用模态框的标题，aria-hidden=true保持模态框在触发前窗口不可见  -->
                        <div class="modal-dialog">
                            <!--  显示模态框对话框型（若不写下一个div则没有颜色）  -->
                            <div class="modal-content">
                                <!--  显示模态框白色背景，所有内容都写在这个div里面  -->

                                <div class="btn-info modal-header">
                                    <h4>Add VIP</h4>
                                    <!--  模态框标题模  -->
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <!--  关闭按钮  -->
                                </div>
                                <div class="modal-body">
                                    <!--  模态框内容，我在此处添加一个表单 -->
                                    <form class="form-horizontal" role="form">

                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess"> VIP id </label>
                                            <input type="number" class="form-control" name="vip_id" placeholder="<?php echo 'number' ?>" required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess"> Account ID </label>
                                            <input type="number" class="form-control" name="ac_id" placeholder="<?php echo 'number' ?>" required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess"> Date </label>
                                            <input type="date" class="form-control" name="date" placeholder="<?php echo 'date' ?>" required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess"> Type </label>
                                            <input type="text" class="form-control" name="type" placeholder="<?php echo 'type' ?>" required>
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
                <form method="post" action="updatevip.php" class="form-horizontal" role="form" id="myForm1" onsubmit="return">
                    <div class="modal fade" id="updatevip" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <!--  定义模态框，过渡效果为淡入，id为myModal,tabindex=-1可以禁用使用tab切换，aria-labelledby用于引用模态框的标题，aria-hidden=true保持模态框在触发前窗口不可见  -->
                        <div class="modal-dialog">
                            <!--  显示模态框对话框模型（若不写下一个div则没有颜色）  -->
                            <div class="modal-content">
                                <!--  显示模态框白色背景，所有内容都写在这个div里面  -->
                                <div class="btn-info modal-header">
                                    <h4>Update VIP</h4>
                                    <!--  模态框标题  -->
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <!--  关闭按钮  -->
                                </div>
                                <div class="modal-body">
                                    <!--  模态框内容，我在此处添加一个表单 -->
                                    <form class="form-horizontal" role="form">

                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess"> VIP id </label>
                                            <input type="number" class="form-control" name="vip_id" placeholder="<?php echo 'number' ?>" required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess"> Account ID </label>
                                            <input type="number" class="form-control" name="ac_id" placeholder="<?php echo 'number' ?>" required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess"> Date </label>
                                            <input type="date" class="form-control" name="date" placeholder="<?php echo 'date' ?>" required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess"> Type </label>
                                            <input type="text" class="form-control" name="type" placeholder="<?php echo 'type' ?>" required>
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

        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });
        </script>