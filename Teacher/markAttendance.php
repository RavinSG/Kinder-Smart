<?php
session_start();
require_once ("checklogin.teacher.php")?>
<!DOCTYPE html>
<html>
<head>
    <title>KinderSmart</title>
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
</nav>s
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



