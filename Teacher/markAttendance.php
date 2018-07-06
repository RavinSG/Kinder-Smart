<?php
session_start();
require_once ("checklogin.teacher.php")?>
<!DOCTYPE html>
<html>
<head>
    <title>KinderSmart</title>
    <link rel="stylesheet" href="../include/style.css">
</head>

<body>
<div class="navbar">
    <a class="active" href="home.html">Home</a>
    <a href="applyLeave.php">Apply Leave</a>
    <a href="markAttendance.php">Mark Attendance</a>
    <a href="viewSyllabus.php">Syllabus</a>
    <a href="viewChildRemoveRequests.php">Child Remove Requests</a>
    <a href="sentMessage.php">Send Message</a>
    <a href="#">Settings</a>
    <a href="#">Logout</a>
</div>
<form action="../include/conToAttendance.php">
    <table border="1">
        <tr>
            <th>Child Name</th>
            <th>Attendance</th>
        </tr>
        <?php
        require_once '../include/pdo.inc.php';
        $stmt = $pdo->query("SELECT * FROM children");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td>";
            echo $row['child_fname'];
            $name = $row['child_fname'];
            echo "</td><td style='text-align: center;'>";
            echo "<input type='checkbox' id='name' name='name[]'
                value=$name><label for 'check'>";
        }
        ?>
    </table>
    <input type="submit" name="submit" value="Register Attendance">
</form>
<br>


<?php

    if (isset($_GET['submit'])){
        $atten = $_GET['name'];
        foreach ($atten as $name){
            echo $name."<br/>";
        }
    }
?>
</body>
</html>



