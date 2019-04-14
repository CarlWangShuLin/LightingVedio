<?php

//start session
session_start();

//if the session variable is not set, redirect to login.php
if (!isset($_SESSION['login_user'])) {
    header('location: ../login.php');
}

if($_SESSION['login_level'] >= $pagelevel) {
} else {
    header('location: 404.php');
}

?>