<?php
require_once "../classes/KinderParent.php";
session_start();

if (!isset($_SESSION['uid'])){
    header("Location: ../Login");
} elseif ($_SESSION['type'] != 'parent'){
    header("Location: ../Login");
}
?>