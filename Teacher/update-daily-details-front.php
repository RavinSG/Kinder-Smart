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
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Update Daily Details</title>
</head>
<body>
<nav>
    <div class="nav-wrapper blue">
        <a href="#" class="brand-logo left">KinderSmart</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="home.html"><i class="material-icons left">home</i>Home</a></li>
            <li><a href="#" ><i class="material-icons left">settings</i>Settings</a></li>
            <li class="red"><a href="#"><i class="material-icons left">phonelink_erase</i>Logout</a></li>
        </ul>
    </div>
</nav>
    <h2 class="center">Daily Details</h2>
    <div class="container" style="width: 40%">
        <form action="update-daily-details.php" method="POST">
            <label for="homework"><h5 class="black-text">Homework :</h5>
                <textarea name="homework" placeholder="Enter Homework For the Day Here" rows="10"></textarea>
            </label>

            <label for="spec_note"><h5 class="black-text">Special note :</h5>
                <textarea name="spec_note" placeholder="Enter Special Notes For the Day Here" rows="10"></textarea>
            </label>

            <input type="submit" value="submit" class="btn green">
        </form>
    </div>
</body>
</html>