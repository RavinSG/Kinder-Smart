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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../style/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Home</title>
</head>
<body>
<?php include("navbar.parent.php");?>


<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../style/js/materialize.min.js"></script>
<script>
    (function($){
        $(function(){

            $('.sidenav').sidenav();

        }); // end of document ready
    })(jQuery); // end of jQuery name space
</body>
</html>