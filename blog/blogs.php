<?php
require_once('../includes/db.php');
require_once('../includes/head.php');
?>

<title>Video 1</title>
</head>

<body class="bg2">
    <span class="smalllines">&nbsp;</span>
    <!-- Wrapper -->
    <div id="wrapper_sec">
        <!-- Top Section -->
        <div class="top_sec">
            <!-- Top Section Left Links -->
            <div class="toplinks">
                <ul>
                    <li class="first"><a href="index.php">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="signup.php">Signup</a></li>
                    <li><a href="account.php">My account</a></li>
                </ul>
            </div>
            <!-- Top Section right Links -->
            <div class="links_icons">
                <ul>
                    <li class="last lang">Language: <a href="#"><img src="../images/flag1.gif" alt="" /></a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
        <!-- Header -->
        <div id="masthead">
            <!-- Logo -->
            <div class="logo">
                <a href="index.php"><img src="../images/logo.png" style="width:100%;"></a>
            </div>
            <!-- Navigation -->
            <div class="navigation">
                <div id="smoothmenu1" class="ddsmoothmenu">
                    <ul>
                        <li><a href="index.php" class="staticlinks">Home</a></li>
                        <li><a href="videos.php" class="staticlinks">Videos</a></li>
                        <li><a href="blogs.php">Blogs</a>
                        </li>
                        <li><a href="ranklist_videos.php" class="staticlinks">Rank lists</a>
                            <ul>
                                <li><a href="ranklist_videos.php">Rank list of videos</a></li>
                                <li><a href="ranklist_blogs.php">Rank list of blogs</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
            <!-- Search -->
            <div class="search">
                <input type="text" value="Enter keyword to search" id="searchBox" name="s" onblur="if(this.value == '') { this.value = 'Enter keyword to search'; }" onfocus="if(this.value == 'Enter keyword to search') { this.value = ''; }" class="bar" />
                <a href="#" class="go">&nbsp;</a>
            </div>
        </div>
        <div class="clear"></div>
        <!-- Content Section -->
        <div id="content_sec">
            <!-- Bread Crumb -->
            <div id="crumb">
                <h5>You are here:</h5>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us </a></li>
                    <li class="last"><a href="#">Information</a></li>
                </ul>
                <a style="font-size: 24px;" href="addblog.php"><button>Write New Blog</button></a>
                <a style="font-size: 24px;" href="deblog.php"><button>Choose Blog Delete</button></a>
            </div>
            <!-- Column 1 -->
            <div class="col1">
                <div class="blog">
                    <h2 class="heading">Blog List</h2>
                    <ul class="bloglisting">


                        <?php
                        $query = "SELECT * ";
                        $query .= "FROM blogs order by bg_id desc ";
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
                            echo "<p class='time'>January 15, 2011</p>";
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
            <div class="paginations">
                        <h5 class="pagehead">PAGE</h5>
                        <ul>
                            <li class="leftpage"><a href="#">&nbsp;</a></li>
                            <li class="pages"><a href="#">1</a></li>
                            <li class="pages"><a href="#">2</a></li>
                            <li class="pages"><a href="#">3</a></li>
                            <li class="pages"><a href="#">4</a></li>
                            <li class="pages"><a href="#">5</a></li>
                            <li class="pages"><a href="#">6</a></li>
                            <li class="pages"><a href="#">7</a></li>
                            <li class="pages"><a href="#">8</a></li>
                            <li class="pages"><a href="#">9</a></li>
                            <li class="pages"><a href="#">10</a></li>
                            <li class="dots">...</li>
                            <li class="pages"><a href="#">103</a></li>
                            <li class="pages"><a href="#">104</a></li>
                            <li class="nextpage"><a href="#">&nbsp;</a></li>
                        </ul>
                    </div>
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