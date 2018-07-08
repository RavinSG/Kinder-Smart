<?php

session_start();
$uid = $_SESSION['uid'];
$_SESSION = array();
$_SESSION['uid'] = $uid;
$_SESSION['type'] = 'admin';
header("Location: update-lunch-front.php");