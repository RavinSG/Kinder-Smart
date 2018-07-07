<?php
session_start();
require_once ("checklogin.teacher.php")?>
<!DOCTYPE html>
<html>
<head>
    <title>Table</title>
    <meta charset="UTF-8">
    <title>Welcome to KinderSmart</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../style/css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
<div class="table-title">
    <h3 class="center">Syllabus for 2018</h3>
</div>
    <div class="container">
        <table class="striped responsive-table">
            <thead>
            <tr>
                <th class="text-left">Time Period</th>
                <th class="text-center">Content</th>
                <th class="text-left">Status</th>
            </tr>
            </thead>
            <tbody class="table-hover">

            <?php

            require_once '../classes/syllabus.php';
            $content = $syllabus->getContent();

            foreach ($content as $row){
                echo "<tr><td class='text-left'>";
                echo ($row['start_date']." - ".$row['end_date']);
                echo "</td><td class='text-center'>";
                echo ($row['content']);
                echo "</td><td class='text-center'>";
                echo ($row['status']);
                echo "</td></tr>";
            }

            ?>

            </tbody>
        </table>
    </div>

</body>
</html>