<?php
require_once('../includes/rank_list_header.php');

?>

<link rel="stylesheet" href="../modal/bootstrap.min.css" />
<script src="../modal/jquery.min.js"></script>
<script src="../modal/bootstrap.min.js"></script>

<link rel="stylesheet" href="../js/confirm/example/example.css">
<script src="../js/confirm/lib/sweet-alert.js"></script>
<link rel="stylesheet" href="../js/confirm/lib/sweet-alert.css">
<title>Blogs</title>

</head>

<div id="content_sec" style="position:relative;">
    <div style='position:absolute;margin-top:-20px;z-index:100;'>
        <button style='display:inline;float:left;' data-toggle="modal" data-target="#myModal">Write New Blog</button>
    </div>

    <!-- Column 1 -->
    <div class="col1">
        <div class="blog" style="position:relative;">
            <h2 class="heading">Blog List</h2>

            <div class="container">
                <form method="post" action="addblog.php" class="form-horizontal" role="form" id="myForm" onsubmit="return ">
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <!--  定义模态框，过渡效果为淡入，id为myModal,tabindex=-1可以禁用使用tab切换，aria-labelledby用于引用模态框的标题，aria-hidden=true保持模态框在触发前窗口不可见  -->
                        <div class="modal-dialog">
                            <!--  显示模态框对话框模型（若不写下一个div则没有颜色）  -->
                            <div class="modal-content">
                                <!--  显示模态框白色背景，所有内容都写在这个div里面  -->

                                <div class="btn-info modal-header">
                                    <h4>Write New Blog</h4>
                                    <!--  模态框标题  -->
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <!--  关闭按钮  -->
                                </div>
                                <div class="modal-body">
                                    <!--  模态框内容，我在此处添加一个表单 -->
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label for="bg_title" class="col-sm-2 control-label">Title</label>
                                            <div class="col-sm-9">
                                                <textarea rows="2" cols="100" id="bg_title" class="form-control well" name="bg_title" placeholder="Please Input Blog Title"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="bg_contents" class="col-sm-2 control-label">Contents</label>
                                            <div class="col-sm-9">
                                                <textarea rows="5" cols="100" id="bg_contents" class="form-control well" name="bg_contents" placeholder="Please Input Blog Title"></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="modal-footer">
                                    <!--  模态框底部样式，一般是提交或者确定按钮 -->
                                    <button type="submit" name="submit" class="btn btn-info">Confirm</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                </div>

                            </div><!-- /.modal-content -->
                        </div>
                    </div> <!-- /.modal -->
                </form>
            </div>

            <ul class="bloglisting">
                <?php
                $num_rec_per_page = 6;   // 每页显示数量
                if (isset($_GET["page"])) {
                    $page  = $_GET["page"];
                } else {
                    $page = 1;
                };
                $start_from = ($page - 1) * $num_rec_per_page;
                $query = "SELECT * ";
                $query .= "FROM blogs order by bg_id desc LIMIT $start_from, $num_rec_per_page ";
                $result = mysqli_query($connection, $query);
                //echo $query;
                if (!$result) {
                    die("query is wrong");
                }
                
                
                while ($loop = mysqli_fetch_array($result)) {
                    $acid = $loop['ac_id'];
                    $query3 = "select ac_name from accounts where ac_id = '$acid'";
                    $result3 = mysqli_query($connection, $query3);
                    $row3 = mysqli_fetch_array($result3);

                    $query4 = "select * from blogs where bg_id = " . $loop['bg_id'] . "";
                    $result4 = mysqli_query($connection, $query4);
                    



                    $bgidd = $loop["bg_id"];

                    echo "<li>";

                    echo "<div class='desc'>";

                    echo "<h3>" . "<a href='' class='colr'>" . $loop["bg_title"] . "</a>" . "</h3>";

                    if ($_SESSION['login_user'] == $row3['ac_name']) {

                        echo "<div style='display:inline;float:right;'>";


                        echo "<a href='deblog.php?bg_id=" . $loop["bg_id"] . "' onclick='return del();'><button>Delete</button></a>";
                    
                        echo "</div>";
                        echo "<div style='display:inline;float:right;'>";

                   
                        echo "<button data-toggle='modal' data-target='#myModal1' onclick='Value($bgidd)' >Update</button>";
                        echo "</div>";
                       
                    } else { }

                    echo "<p class='time'>" . $loop['bg_date'] . "</p>";
                    echo "<p class='postedby'>Posted By:      " . $row3['ac_name'] . "</p>";
                    echo "<div class='clear'></div>";
                    echo "<p class='txt'>" . $loop['bg_contents'] . "</p>";
                    echo "</div>";
                    echo "</li>";
                    ?>
                    <div class="container" style="z-index:200;">
                        <form method="post" action="upblog.php" class="form-horizontal" role="form" id="myForm1" onsubmit="return">
                            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <!--  定义模态框，过渡效果为淡入，id为myModal,tabindex=-1可以禁用使用tab切换，aria-labelledby用于引用模态框的标题，aria-hidden=true保持模态框在触发前窗口不可见  -->
                                <div class="modal-dialog">
                                    <!--  显示模态框对话框模型（若不写下一个div则没有颜色）  -->
                                    <div class="modal-content">
                                        <!--  显示模态框白色背景，所有内容都写在这个div里面  -->
                                        <div class="btn-info modal-header">
                                            <h4>Update Blog Information</h4>
                                            <!--  模态框标题  -->
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <!--  关闭按钮  -->
                                        </div>
                                        <div class="modal-body">
                                            <!--  模态框内容，我在此处添加一个表单 -->
                                            <form class="form-horizontal" role="form">
                                                <input type="hidden" id="bg_id" name="bg_id" value="">
                                                <div class="form-group">
                                                    <label for="bg_title" class="col-sm-2 control-label">Title</label>
                                                    <div class="col-sm-9">
                                                        <textarea id="bg_title" rows="2" cols="100" id="bg_title" class="form-control well" name="bg_title"><?php
                                                                                                                                                            echo "Please Input Your Blog Title";
                                                                                                                                                            ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="bg_contents" class="col-sm-2 control-label">Contents</label>
                                                    <div class="col-sm-9">
                                                        <textarea id="bg_contents" rows="5" cols="100" id="bg_contents" class="form-control well" name="bg_contents"><?php
                                                                                                                                                                        echo "Please Input Your Blog Contents";
                                                                                                                                                                        ?></textarea>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="modal-footer">
                                            <!--  模态框底部样式，一般是提交或者确定按钮 -->
                                            <button type="submit" name="submit" class="btn btn-info">Confirm</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        </div>

                                    </div><!-- /.modal-content -->
                                </div>
                            </div> <!-- /.modal -->
                        </form>
                    </div>



                <?php
            }
            ?>

            </ul>
            <div class="clear"></div>

        </div>
        <div class="clear"></div>
    </div>



    <!-- Pagination -->
    <div class="page-icon" style="position:absolute;left:50%;bottom:0;transform: translate(-50%, -50%);">

        <ul>
            <?php
            $query2 = "SELECT * FROM blogs";
            $rs_result = mysqli_query($connection, $query2); //查询数据
            $total_records = mysqli_num_rows($rs_result);  // 统计总共的记录条数
            $total_pages = ceil($total_records / $num_rec_per_page);  // 计算总页数

            echo "<a class='page-disabled' href='blogs.php?page=1'>" . "<i></i>First Page</a>";
            //echo "<li>" . "<a href='blogs.php?page=1'>" . '|<' . "</a>" . "</li>"; // 第一页
            for ($i = 1; $i <= $total_pages; $i++) {
                if ($i == $page) {
                    echo "<span class='page-current'>$i</span>";
                    //echo "<li>$i</li>";  

                } else {
                    echo "<a href='blogs.php?page=" . $i . "'>" . $i . "</a>";
                }
            };
            echo "<a class='page-next' href='blogs.php?page=$total_pages'>" . "Last Page<i></i></a>";
            //echo "<li>" . "<a href='blogs.php?page=$total_pages'>" . '>|' . "</a>" . "</li>"; // 最后一页
            ?>



        </ul>
    </div>
</div>
<script>
    $("#myModal1").modal("hide");

    function Value($bgidd) {
        $("#bg_id").val($bgidd);

    }
</script>



<script>
    function del() {
        if (confirm("Are you sure delete this")) {

            swal(
                "Deleted!",
                "Your imaginary file has been deleted!",
                "success"
            );

            return true;
        } else {
            swal("Cancelled", "Your file is safe :)", "error")
            return false;
        }
    }
</script>

<div class="clear"></div>
<!-- Footer -->
<div class="clear"></div>
<div id="copyrights">
    <div class="inner">
        <p>Copyright © 2019 Group 2. All rights reserved.</p>
    </div>
</div>

</body>

</html>

<?php
// 4. free results
mysqli_free_result($result);

// 5. close db connec tio
mysqli_close($connection);

?>