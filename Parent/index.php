<?php
require_once "../classes/KinderParent.php";
session_start();
require_once ("checklogin.parent.php");
include('navbar.html');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
<?php
$parent_uid = $_SESSION['uid'];
$parent=new KinderParent($parent_uid);
echo("Welcome to Our web page ".$parent->getName());
?>

<h2></h2>
</body>
</html>