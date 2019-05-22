<?php

session_start();
session_destroy();

// change page to login
header('location: login.php');

?>