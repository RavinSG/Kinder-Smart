<?php
require_once('checklogin.admin.inc.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Leave Applications</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../style/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<?php include ("navbar.admin.php");?>
<div class="table-users">
    <h1 class="center">Applied Leaves</h1>
    <div class="container">
    <table cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Leave Date</th>
            <th>Duration</th>
            <th width="230">Note</th>
            <th align="center">Action</th>
            <th>Leave State</th>
        </tr>

        <?php

        require_once '../classes/leave.php';
        $forms = $leave->getForms();
        foreach ($forms as $row){
            echo "<tr><td>";
            echo ($row['id']);
            echo "</td><td>";
            echo ($row['leave_date']);
            echo "</td><td>";
            echo ($row['leave_duration']);
            echo "</td><td>";
            echo ($row['note']);
            echo "</td><td>";
            echo "<a href='../include/deleteLeave.php?state=accept&lid=".$row['lid']."&id=".$row['id']."' class='btn'>Accept</a>
<a href='../include/deleteLeave.php?state=decline&lid=".$row['lid']."&id=".$row['id']."' class='btn'>Decline</a>";
            echo "</td><td style='text-align: center'>";
            echo ($row['state']);
            echo "</td></tr>\n";
        }
        ?>
    </table></div>

</div>
<?php
    if (isset($_GET['state'])){
        $msg = $_GET['state'];
        $id = $_GET['id'];
        if ($msg == 'decline'){

            echo "<div class='center'><p class='btn red white-text' style='font-size: 18px'>You rejected ".$id."'s leave </p></div>";
        }

        elseif ($msg =='accept') {

            echo "<div class='center'><p class='btn green white-text'  style='font-size: 18px'>You accepted ".$id."'s leave</p></div>";

        }
    }
?>
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