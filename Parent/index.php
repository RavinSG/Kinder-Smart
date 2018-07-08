<?php
require_once ("checklogin.parent.php");
if (!isset($_SESSION['parent'])){
    $_SESSION['parent'] = new KinderParent($_SESSION['uid']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
<?php include("navbar.parent.php");?>
</body>
</html>