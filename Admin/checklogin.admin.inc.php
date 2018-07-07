<?php
    require_once "../classes/KinderAdmin.php";
	session_start();
    if (!isset($_SESSION['uid'])){
        header("Location: ../Login");
    } elseif ($_SESSION['type'] != 'admin'){
        header("Location: ../Login");
    }
 ?>