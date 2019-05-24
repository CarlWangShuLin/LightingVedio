<!-- Lighting Video header -->
<?php
require_once('../includes/db.php');
require('../includes/rank_list_header.php');
?>

<!-- Video -->


<!DOCTYPE html>
<html>

<body>

    <!-- Content Section -->
    <div id="content_sec">
        <!-- Bread Crumb -->
        <div id="crumb">
            <h2>Upload Video:</h2>
            <form method="POST" action="upload.php" enctype="multipart/form-data">
                <input type="hidden" name="MAX_FILE_SIZE">
                <input class="btn btn-primary" type="file" name="myfile">
                <div class="input-group">
                    <input class="videoname" type="text" name="videoname" placeholder="Videoname">
                    <input class="form-control" type="text" name="vd_content" placeholder="Video Description">
                </div>
                <button type="submit" class="btn btn-primary" name="submit" class="text">Submit</button>
            </form>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <!-- Column 1 -->
        <div class="col1">
            <div class="clear"></div>
            <!-- White Section small -->
            <div class="clear"></div>
            <!-- Recent Videos -->
            <div class="recent_videos">

                <div class="clear"></div>
                <!-- Video Listing -->
                <?php
                $num_rec_per_page = 6;   // 每页显示数量
                if (isset($_GET["page"])) {
                    $page  = $_GET["page"];
                } else {
                    $page = 1;
                };
                $start_from = ($page - 1) * $num_rec_per_page;
                $query  = "SELECT COUNT(a.pop_id) as popularity, b.vd_id, b.vd_name, b.vd_content, b.vd_date ";
                $query .= "FROM popularity a, videos b ";
                $query .= "WHERE a.vd_id = b.vd_id GROUP BY vd_id order by vd_id desc LIMIT $start_from, $num_rec_per_page ";
                $result = mysqli_query($connection, $query);
                //echo $query;
                if (!$result) {
                    die("query is wrong");
                }

                while ($row = mysqli_fetch_array($result)) {
                    echo '<ul class="display">';
                    echo '<li>';
                    echo '<div class="bigsec">';
                    echo '<h4><a href="../video/videopage.php?id=' . $row["vd_id"] . '" class="colr"><tr><td>' . $row["vd_name"] . '</td></tr></a></h4>';
                    echo '<div class="clear"></div>';
                    echo  '<div class="clear"></div>';
                    echo    '<p class="txt">' . $row['vd_content'] . '</p>';;
                    echo     '<div class="clear"></div>';
                    echo        '<div class="postedby">';
                    echo        '<p class="views"><span class="left">Views:' . $row["popularity"] . '</span></p>';
                    echo    '</div>';
                    echo    '<div class="right">';
                    echo        '<p class="date"><span>' . $row["vd_date"] . '</span></p>';
                    echo    '</div>';
                    echo '</div>';
                    echo    '<div class="smallsec">';
                    echo    '<h6><a href="detail.html" class="colr">Lorem ipsum dolor sit amet</a></h6>';
                    echo    '<div class="clear"></div>';
                    echo    '<p class="date">' . $row["vd_date"] . '</p>';
                    echo '</div>';
                    echo '</li>';
                    echo '</ur>';
                }
                ?>
                <!-- Pagination -->
                <div class="page-icon" style="position:absolute;left:50%;bottom:0;transform: translate(-50%, -50%);">

                    <ul>
                        <?php

                        $query2 = "SELECT * FROM videos";
                        $rs_result = mysqli_query($connection, $query2); //查询数据
                        $total_records = mysqli_num_rows($rs_result);  // 统计总共的记录条数
                        $total_pages = ceil($total_records / $num_rec_per_page);  // 计算总页数

                        echo "<a class='page-disabled' href='videos.php?page=1'>" . "<i></i>First Page</a>";
                        //echo "<li>" . "<a href='blogs.php?page=1'>" . '|<' . "</a>" . "</li>"; // 第一页
                        for ($i = 1; $i <= $total_pages; $i++) {
                            if ($i == $page) {
                                echo "<span class='page-current'>$i</span>";
                                //echo "<li>$i</li>";  

                            } else {
                                echo "<a href='videos.php?page=" . $i . "'>" . $i . "</a>";
                            }
                        };
                        echo "<a class='page-next' href='videos.php?page=$total_pages'>" . "Last Page<i></i></a>";
                        //echo "<li>" . "<a href='blogs.php?page=$total_pages'>" . '>|' . "</a>" . "</li>"; // 最后一页
                        ?>



                    </ul>
                </div>
            </div>
        </div>
    </div>

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
require('../video/upload.php');

// 5. close db connec tio
mysqli_close($connection);
?>