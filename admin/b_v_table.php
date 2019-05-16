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
                <h6 class="m-0 font-weight-bold text-primary">Blog information sheet</h6>
                <!-- button start -->
                <button data-toggle="modal" data-target="#addbg">Add Blog</button>
                <!-- button end-->
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
                                <th>Update</th>
                                <th>Delete</th>
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
                                echo "<td><button data-toggle='modal' data-target='#updatebg'>update</buttone></td>";
                                echo "<td><a class='text' href='deletebg.php?bg_id=" . $row["bg_id"] . "'>delete</a></td>";
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
                <form method="post" action="addbg.php" class="form-horizontal" role="form" id="myForm" onsubmit="return ">
                    <div class="modal fade" id="addbg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <!--  定义模态框，过渡效果为淡入，id为myModal,tabindex=-1可以禁用使用tab切换，aria-labelledby用于引用模态框的标题，aria-hidden=true保持模态框在触发前窗口不可见  -->
                        <div class="modal-dialog">
                            <!--  显示模态框对话框型（若不写下一个div则没有颜色）  -->
                            <div class="modal-content">
                                <!--  显示模态框白色背景，所有内容都写在这个div里面  -->

                                <div class="btn-info modal-header">
                                    <h4>Write Blog</h4>
                                    <!--  模态框标题模  -->
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <!--  关闭按钮  -->
                                </div>
                                <div class="modal-body">
                                    <!--  模态框内容，我在此处添加一个表单 -->
                                    <form class="form-horizontal" role="form">

                                        <div class="form-group has-success">
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
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess"> Account ID </label>
                                            <input type="number" class="form-control" name="ac_id" placeholder="<?php echo 'number' ?>" required>
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
                <form method="post" action="updatebg.php" class="form-horizontal" role="form" id="myForm" onsubmit="return ">
                    <div class="modal fade" id="updatebg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <!--  定义模态框，过渡效果为淡入，id为myModal,tabindex=-1可以禁用使用tab切换，aria-labelledby用于引用模态框的标题，aria-hidden=true保持模态框在触发前窗口不可见  -->
                        <div class="modal-dialog">
                            <!--  显示模态框对话框型（若不写下一个div则没有颜色）  -->
                            <div class="modal-content">
                                <!--  显示模态框白色背景，所有内容都写在这个div里面  -->

                                <div class="btn-info modal-header">
                                    <h4>Update Blog</h4>
                                    <!--  模态框标题模  -->
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <!--  关闭按钮  -->
                                </div>
                                <div class="modal-body">
                                    <!--  模态框内容，我在此处添加一个表单 -->
                                    <form class="form-horizontal" role="form">

                                        <div class="form-group has-success">
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
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess"> Account ID </label>
                                            <input type="number" class="form-control" name="ac_id" placeholder="<?php echo 'number' ?>" required>
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

            <!-- DataTales start -->
            <div class="table">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Video information sheet</h6>
                            <!-- button start -->
                            <form method="POST" action="addvd.php" enctype="multipart/form-data">
                                <input type="hidden" name="MAX_FILE_SIZE">
                                <input class="btn btn-primary" type="file" name="myfile">
                                <div class="input-group">
                                    <input class="videoname" type="text" name="videoname" placeholder="Videoname">
                                    <input class="form-control" type="text" name="vd_content" placeholder="Description">
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit" class="text">Submit</button>
                            </form>

                            <!-- button end-->
                        </div>
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">

                                <!--//do a query -->
                                <?php

                                $query = "SELECT * ";
                                $query .= "FROM videos";

                                //echo $query;

                                $result = mysqli_query($connection, $query);

                                if (!$result) {
                                    die("query is wrong");
                                }
                                ?>
                                <thead>
                                    <tr>
                                        <th>Video ID</th>
                                        <th>Video name</th>
                                        <th>Video Date</th>
                                        <th>Video file</th>
                                        <th>Account ID</th>
                                        <th>Popularity</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $row["vd_id"] . "</td>";
                                        echo "<td>" . $row["vd_name"] . "</td>";
                                        echo "<td>" . $row["vd_date"] . "</td>";
                                        echo "<td>" . $row["vd_file"] . "</td>";
                                        echo "<td>" . $row["ac_id"] . "</td>";
                                        echo "<td>" . $row["vd_popularity"] . "</td>";
                                        echo "<td><a class='text' href='deletevd.php?vd_id=" . $row["vd_id"] . "'>delete</a></td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- DataTales end -->
            </div>
            <!-- conten end -->

            <script>
                $(document).ready(function() {
                    $('#dataTables-example').DataTable({
                        responsive: true
                    });
                });
            </script>