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
    <link rel="stylesheet" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<?php require("navbar.teacher.html");

if (isset($_GET['msg'])){
    $check = $_GET['msg'];

    if ($check == 'marked'){
        echo "<div class='center msg'><p class='btn red msg'>You have already marked attendance for today</p></div>";

    } elseif ($check == 'empty'){
        echo "<div class='center msg'><p class = 'btn red msg'>At least pick one student</p></div>";

    }elseif ($check == 'success'){
        echo "<div class='center msg'><p class = 'btn green msg'>Attendance has been registered!</p></div>";
    }
}
?>

    <form action="../include/conToAttendance.php">
        <div class="container table" style="wdith: 40%">
        <table border="1">
            <tr>
                <th>Child Name</th>
                <th class="center">Attendance</th>
            </tr>
            <?php
            require_once '../include/pdo.inc.php';
            $stmt = $pdo->query("SELECT * FROM children");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr><td>";
                echo $row['child_fname'];
                $name = $row['child_fname'];
                echo "</td><td style='text-align: center;'>";
                echo"<label>";
                echo "<input type='checkbox' id='name' name='name[]'
                value=$name><span> </span></label>";
            }
            ?>
        </table>
            <br>
            <div class="center">
                <input type="submit" name="submit" value="Register Attendance" class="btn green">
            </div>
        </div>
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



