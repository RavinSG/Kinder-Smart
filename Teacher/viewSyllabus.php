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
    <link rel="stylesheet" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<?php require("navbar.teacher.html");?>
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

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../style/js/materialize.min.js"></script>
<script>
    (function($){
        $(function(){

            $('.sidenav').sidenav();

        }); // end of document ready
    })(jQuery); // end of jQuery name space

</script>
</body>
</html>