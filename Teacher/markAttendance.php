<!DOCTYPE html>
<html>
<head>
    <title>KinderSmart</title>
    <link rel="stylesheet" href="../include/style.css">
</head>

<body>
<div class="navbar">
    <a href="home.html">Home</a>
    <a href="applyLeave.php">Apply Leave</a>
    <a class="active" href="markAttendance.php">Mark Attendance</a>
    <a href="viewSyllabus.php">View Syllabus</a>
</div>
<table border="1">
    <tr>
        <th>Child Name</th>
        <th>Attendance</th>
    </tr>
<?php
    require_once '../include/pdo.inc.php';
    $stmt = $pdo->query("SELECT * FROM children");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo "<tr><td>";
        echo $row['child_fname'];
        echo "</td><td style='text-align: center;'>";
        echo "<input type='checkbox' id='check' name='check'
            value=''/><label for 'check'>";
    }
?>
</table>
<br>
<input type="button" name="submit" value="Register Attendance">
</body>
</html>



