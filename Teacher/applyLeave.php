<?php
session_start();
require_once ("checklogin.teacher.php")?>
<!DOCTYPE html>
<html>
<head>
    <title>Apply Leave</title>
    <link rel="stylesheet" href="../include/style.css">
    <link rel="stylesheet" href="../include/form.css">
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
<h2>Leave Form</h2>
<form action="../include/leave.php" method="post" id="target">
    <?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        echo '<input type="text" name="id" placeholder="Teacher ID"  value="'.$id.'">';
    }
    else{
        echo '<input type="text" name="id" placeholder="Teacher ID">';
    }
    if (isset($_GET['nopay'])){
        $nopay = $_GET['nopay'];
        echo '<input type="checkbox" class="box" name="nopay" value=$nopay>';
    }
    else {
        echo '<input type="checkbox" class="box" name="nopay" >';
    }
    if(isset($_GET['date'])){
        $date = $_GET['date'];
        echo '<input type="date" name="date" placeholder="Date" value="'.$date.'">';
    }
    else{
        echo '<input type="date" name="date" placeholder="Date">';

    }
    if(isset($_GET['duration'])){
        $duration = $_GET['duration'];
        echo '<input type="number" name="duration" placeholder="Duration" value="'.$duration.'">';
    }
    else{
        echo '<input type="number" name="duration" placeholder="Duration">';
    }

    if(isset($_GET['note'])){
        $note = $_GET['note'];
        echo '<input type="text" class="note" name="note" placeholder="Note" value="'.$note.'">';
    }
    else{
        echo '<input type="text" class="note" name="note" placeholder="Note">';
    }

    ?>
    <input type="submit" name="submit" value="Submit">

</form>

<?php

if (isset($_GET['msg'])){
    $msg = $_GET['msg'];

    if ($msg == 'insufficient'){
        echo "<p class='error'>You don't have enough leaves left!<br>Would you like to apply for no pay leave?</p>";

    } elseif ($msg == 'empty'){
        echo "<p class='error'>Please fill in all the details!</p>";

    } elseif ($msg == 'date'){
        echo "<p class='error'>Please enter a valid date!</p>";

    } elseif ($msg == 'unavailable'){
        echo "<p class='error'>Please enter a valid ID!</p>";

    } elseif ($msg == 'duration'){
        echo "<p class='error'>Please enter a valid leave duration!</p>";

    }  elseif ($msg =='registered'){
        echo "<p class='success'>Your leave form has been registered!</p>";

    }
}
?>
</body>
</html>

