<?php
/**
 * Created by PhpStorm.
 * User: Harith
 * Date: 7/8/2018
 * Time: 3:24 AM
 */
session_start();
$uid = $_SESSION['uid'];
$_SESSION = array();
$_SESSION['uid'] = $uid;
$_SESSION['type'] = 'admin';
header("Location: update-lunch-front.php");