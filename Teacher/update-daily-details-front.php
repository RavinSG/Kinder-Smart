<?php
session_start();
require_once ("checklogin.teacher.php")?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Daily Details</title>
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
    <h2>Daily Details</h2>
    <form action="update-daily-details.php" method="POST">
        <label for="homework">Homework : </label>
        <textarea name="homework" placeholder="Enter Homework For the Day Here"></textarea>
        <label for="spec_note">Special note : </label>
        <textarea name="spec_note" placeholder="Enter Special Notes For the Day Here"></textarea>
        <input type="submit" value="submit">
    </form>
</body>
</html>