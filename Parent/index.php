<?php
require_once "../classes/KinderParent.php";
session_start();
if (!isset($_SESSION['parent'])) {
    header("Location: ../Login/index.html?error=login");
    return;
}
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
$parent = $_SESSION['parent'];
echo("Welcome to Our web page ".$parent->getName());
?>

<h2></h2>
</body>
</html>