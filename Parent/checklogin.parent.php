<?php

if (!(isset($_SESSION['uid']) && isset($_SESSION['type']))) {
    if($_SESSION['type']!='parent'){}
    header("Location: ../Login/index.html?error=login");
    return;
}
?>