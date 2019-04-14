<?php
require_once('../includes/db.php');
require_once('../includes/head.php');

include('../includes/adminhead.php');
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'default';
}
if ($page == 'default') {
    include("chart.php");
} else if ($page == 'table') {
    include("a_c_table.php");
} else if ($page == 'blog_video') {
    include("b_v_table.php");
} else if ($page == 'an_co') {
    include("an_co_table.php");
} else if ($page == 'function') {
    include("f_table.php");
}
?>
