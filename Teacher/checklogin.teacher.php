<?php

if (!isset($_SESSION['uid'])){
    header("Location: ../Login");
} elseif ($_SESSION['type'] != 'teacher'){
    header("Location: ../Login");
}
?>