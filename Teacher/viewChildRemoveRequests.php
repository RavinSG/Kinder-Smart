<?php
session_start();
require_once ("checklogin.teacher.php")?>
<!DOCTYPE html>
<html>
<head>
    <title>Requests for child removal from transport</title>
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
<div class="table-users">
    <div class="header">Requests</div>

    <table cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Time</th>
            <th>Method</th>
            <th align="center">Action</th>
            <th>Remove State</th>
        </tr>

        <?php

        require_once '../classes/childRemoveRequest.php';
        $request = new ChildRemoveRequest();
        $requests = $request->getRequests();
        foreach ($requests as $row){
            echo "<tr><td>";
            echo ($row['child_id']);
            echo "</td><td>";
            echo ($row['remove_date']);
            echo "</td><td>";
            echo ($row['remove_time']);
            echo "</td><td>";
            echo ($row['method']);
            echo "</td><td>";
            echo "<a href='acceptChildRemoveRequest.php?state=accept&id=".$row['child_id']."' class='button'>Accept</a>";
            echo "</td><td style='text-align: center'>";
            if($row['state']==1){
                echo 'Accepted';
            }
            else{
                echo 'Not Viewed';
            }
            echo "</td></tr>\n";
        }
        ?>
    </table>

</div>
</body>
</html>