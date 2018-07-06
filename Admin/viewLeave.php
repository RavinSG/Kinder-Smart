<!DOCTYPE html>
<html>
<head>
    <title>Accept</title>
    <link rel="stylesheet" href="../include/table.css">
    <link rel="stylesheet" href="../include/style.css">
    <link rel="stylesheet" href="../include/form.css">
</head>
<body>
<div class="navbar">
    <a href="home.php">Home</a>
    <a href="registration/addTeacher.php">Add Teacher Info</a>
    <a href="registration/addChild.php">Add Child</a>
    <a href="registration/registration.parent.php">Register Parent</a>
    <a href="registration/registration.admin.php">Add Admin</a>
    <a class="active" href="viewLeave.php">Manage Leave</a>
    <a href="food/update-lunch-front.php">Update Food</a>
</div>
<div class="table-users">
    <div class="header">Applied Leaves</div>

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
            echo "<a href='../include/deleteLeave.php?state=accept&id=".$row['id']."' class='button'>Accept</a>
<a href='../include/deleteLeave.php?state=decline&id=".$row['id']."' class='button'>Decline</a>";
            echo "</td><td style='text-align: center'>";
            echo ($row['state']);
            echo "</td></tr>\n";
        }
        ?>
    </table>

</div>
<?php
    if (isset($_GET['state'])){
        $msg = $_GET['state'];
        $id = $_GET['id'];
        if ($msg == 'decline'){

            echo "<p class='error' style='font-size: 18px'>You rejected ".$id."'s leave </p>";
        }

        elseif ($msg =='accept') {

            echo "<p class='success'  style='font-size: 18px'>You accepted ".$id."'s leave</p>";

        }
    }
?>
</body>
</html>