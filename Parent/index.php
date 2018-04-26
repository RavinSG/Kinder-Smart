<?php
require_once "../classes/KinderParent.php";
session_start();
if (!isset($_SESSION['parent'])) {
    header("Location: ../Login/login.html?error=login");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
include('navbar.php');
$parent = $_SESSION['parent'];
echo("Welcome to Our web page ".$parent->getName());
?>

<h2></h2>
</body>
</html>