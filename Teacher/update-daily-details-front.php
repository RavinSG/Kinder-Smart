<?php
session_start();
require_once ("checklogin.teacher.php")?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <title>Welcome to KinderSmart</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../style/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Update Daily Details</title>
</head>
<body>
<?php require("navbar.teacher.html");?>
    <h2 class="center">Daily Details</h2>
    <div class="container form">
        <form action="update-daily-details.php" method="POST">
            <div class="input-field">
                <textarea name="homework" id="spec_note" placeholder="Enter Homework For the Day Here" required class="materialize-textarea validate"></textarea>
                <label for="homework">Homework :</label>
            </div>
            <br><br>
            <div class="input-field">
                <textarea name="spec_note" id="spec_note" placeholder="Enter special notes For the Day Here" required class="materialize-textarea validate"></textarea>
                <label for="spec_note">Special Notices :</label>
            </div>
            <div class="center">
                <input type="submit" value="submit" class="btn green">
            </div>
        </form>
    </div>
<script type="text/javascript" src="../style/js/materialize.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
    (function($){
        $(function(){

            $('.sidenav').sidenav();

        }); // end of document ready
    })(jQuery); // end of jQuery name space

</script>
</body>
</html>