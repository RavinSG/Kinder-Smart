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
<?php require("navbar.teacher.html");?>
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
<script type="text/javascript" src="js/materialize.min.js"></script>
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('.sidenav').sidenav();
    });
</script>
</body>
</html>