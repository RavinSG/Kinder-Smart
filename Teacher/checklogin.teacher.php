<?php
/**
 * Created by PhpStorm.
 * User: Harith
 * Date: 7/7/2018
 * Time: 1:42 AM
 */
if (!isset($_SESSION['uid'])){
    header("Location: ../Login");
} elseif ($_SESSION['type'] != 'teacher'){
    header("Location: ../Login");
}
?>