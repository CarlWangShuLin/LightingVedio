<?php
require_once('../includes/rank_list_header.php');
?>

<title>Blogs</title>
</head>

<div id="content_sec" style="position:relative;">

    <!-- Column 1 -->
    <div class="col1">
        <div class="blog">
            <h2 class="heading">Blog List</h2>
            <a style="font-size: 24px;" href="addblog.php"><button>Write New Blog</button></a>
            <a style="font-size: 24px;" href="deblog.php"><button>Choose Blog Delete</button></a>
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
                while ($row = mysqli_fetch_array($result)) {
                    echo "<li>";
                    echo "<div class='desc'>";
                    echo "<h3>" . "<a href='' class='colr'>" . $row["bg_title"] . "</a>" . "</h3>";
                    echo "<button style='margin-left: 15px;'><a class='colr' href='upblog.php?bg_id=" . $row["bg_id"] .
                        "'>update</a></button>";
                    echo "<p class='time'>" . $row['bg_date'] . "</p>";
                    echo "<p class='postedby'>Posted By: RayWilliams</p>";
                    echo "<div class='clear'></div>";
                    echo "<p class='txt'>" .
                        $row['bg_contents'] .
                        "</p>";
                    echo "</div>";
                    echo "</li>";
                }
                //<a href="#" class="colr readmore">Read More</a>
                //        <a href="#" class="colr readmore">Collection</a>
                //        <a href="#" class="colr readmore">Download</a>
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
            
	echo "<a class='page-disabled' href='blogs.php?page=1'>"."<i></i>First Page</a>";
            //echo "<li>" . "<a href='blogs.php?page=1'>" . '|<' . "</a>" . "</li>"; // 第一页
            for ($i = 1; $i <= $total_pages; $i++) {
                if($i==$page)  

                    {  
                        echo "<span class='page-current'>$i</span>";
                        //echo "<li>$i</li>";  

                    }else {
                echo "<a href='blogs.php?page=" . $i . "'>" . $i . "</a>";
                    }
            };
            echo "<a class='page-next' href='blogs.php?page=$total_pages'>"."Last Page<i></i></a>";
            //echo "<li>" . "<a href='blogs.php?page=$total_pages'>" . '>|' . "</a>" . "</li>"; // 最后一页
            ?>



        </ul>
    </div>
</div>

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