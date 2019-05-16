<!-- Recent Announcement -->
<div class="recent_videos">
    <h1>Announcement</h1>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "
        <ul class='display'>
        <li>
        <div class='bigsec'>
        <h4>
        <p class='colr'>" . $row["an_name"] . "</p>";
        echo "</h4>
        <p class='txt'>" . $row["an_contents"] . "</p>
        <div class='clear'></div>
        <div class='postedby'>
        <p class='postbytxt'>By: <a href='#'>Lighting Video</a></p>
        </div>
        <div class='right'><p class='time'>213</p></div></div></li></ul> ";
    }
    ?>
</div>
<!-- Pagination -->
<div class="page-icon" style="position:absolute;left:50%;bottom:0;transform: translate(-50%, -50%);">

<ul>
    <?php
     $num_rec_per_page = 2;   // 每页显示数量
     if (isset($_GET["page"])) {
         $page  = $_GET["page"];
     } else {
         $page = 1;
     };
     $start_from = ($page - 1) * $num_rec_per_page;
     $query = "SELECT * ";
     $query .= "FROM announcements order by an_id asc LIMIT $start_from, $num_rec_per_page ";
     $result = mysqli_query($connection, $query);
     //echo $query;
     if (!$result) {
         die("query is wrong");
     }
    $query2 = "SELECT * FROM announcements";
    $rs_result = mysqli_query($connection, $query2); //查询数据
    $total_records = mysqli_num_rows($rs_result);  // 统计总共的记录条数
    $total_pages = ceil($total_records / $num_rec_per_page);  // 计算总页数

    echo "<a class='page-disabled' href='index.php?page=1'>" . "<i></i>First Page</a>";
    for ($i = 1; $i <= $total_pages; $i++) {
        if ($i == $page) {
            echo "<span class='page-current'>$i</span>";
        } else {
            echo "<a href='index.php?page=" . $i . "'>" . $i . "</a>";
        }
    };
    echo "<a class='page-next' href='index.php?page=$total_pages'>" . "Last Page<i></i></a>";
    ?>



</ul>
</div>