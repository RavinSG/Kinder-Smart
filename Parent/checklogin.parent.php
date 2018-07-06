<?php
/**
 * Created by PhpStorm.
 * User: Harith
 * Date: 7/7/2018
 * Time: 12:34 AM
 */
if (!(isset($_SESSION['uid']) && isset($_SESSION['type']))) {
    if($_SESSION['type']!='parent'){}
    header("Location: ../Login/index.html?error=login");
    return;
}
?>