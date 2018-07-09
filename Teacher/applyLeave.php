<?php
include "../classes/KinderTeacher.php";
session_start();
require_once ("checklogin.teacher.php");

$teacher = $_SESSION['teacher'];
$id = $teacher->getID();
require_once "getLeave.php";

$date ="";
if (isset($_GET['date'])){
    $date = $_GET['date'];
}

$duration = "";
if(isset($_GET['duration'])) {
    $duration = $_GET['duration'];
}

$note = "";
if(isset($_GET['note'])) {
    $note = $_GET['note'];
}

$nopay ="";
if (isset($_GET['nopay'])) {
    $nopay = $_GET['nopay'];
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Apply Leave</title>
    <meta charset="UTF-8">
    <title>Welcome to KinderSmart</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../style/css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<?php
require("navbar.teacher.html");

?>
<h2 class="center">Leave Form</h2>

<?php

if (isset($_GET['msg'])){
    $check = $_GET['msg'];

    if ($check == 'insufficient'){
        echo "<div class='center msg'><p class='btn red msg'>You don't have enough leaves left! Would you like to apply for no pay leave?</p></div>";

    } elseif ($check == 'empty'){
        echo "<div class='center msg'><p class = 'btn red msg'>Please fill in all the details!</p></div>";

    }elseif ($check == 'date'){
        echo "<div class='center msg'><p class = 'btn red msg'>Please enter a valid date!</p></div>";

    }elseif ($check == 'duration'){
        echo "<div class = 'center msg'><p class = 'btn red msg'>Please enter a valid leave duration!</p></div>";

    }elseif ($check == 'fired'){
        echo "<div class = 'center msg'><p class = 'btn red msg'>Resigning from the job might be better :P contact administration for longer leaves</p></div>";

    }elseif ($check == 'registered'){
        echo "<div class='center msg'><p class = 'btn green msg'>Your leave form has been registered!</p></div>";
    }
}
?>
<div class="row">
<div class="container" style="width: 40%">
    <form class="col s12" action="../include/leave.php" method="post">

        <div class="row">
            <div class="input-field col s12">
                <input type="text" disabled name="id" placeholder="Teacher ID" value="<?php echo $id?>">
                <label for="text">Teacher ID</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <label>No Pay
                    <input type="checkbox" name="nopay" value="<?php echo $nopay?>">
                    <span> </span>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input type="date" name="date" placeholder="Date" value="<?php echo $date?>">
                <label for="date">Leave Date</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input type="number" name="duration" placeholder="Duration" value="<?php echo $duration?>">
                <label for="duration">Leave Duration</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input type="text" name="note" placeholder="Note" value="<?php echo $note?>">
                <label for="note">Note</label>
            </div>
        </div>

        <button type="submit" name="submit" value="Submit" class="btn green center-block">Submit</button>

    </form>
</div>

</div>
<script type="text/javascript" src="../style/js/materialize.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
    (function($){
        $(function(){
            $('.sidenav').sidenav();
        }); // end of document ready
    })(jQuery); // end of jQuery name space

</script>
<h2 class="center">Applied Leaves</h2>
<table class="centered" width="">
    <tr>
        <th class="center">Date</th>
        <th class="center">Note</th>
        <th class="center">State</th>
    </tr>
<?php

    foreach ($applied as $row){
        echo "<tr><td>";
        echo $row['leave_date']."</td><td>";
        echo $row['note']."</td><td>";
        echo $row['state']."</td></tr>";
    }
?>
</table>

</body>
</html>

