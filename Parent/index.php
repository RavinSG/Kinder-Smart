<?php
require_once ("checklogin.parent.php");
if (!isset($_SESSION['parent'])){
    echo "first time only!";
    $_SESSION['parent'] = new KinderParent($_SESSION['uid']);
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
//print_r($_SESSION);
?>

<h2></h2>
</body>
</html>