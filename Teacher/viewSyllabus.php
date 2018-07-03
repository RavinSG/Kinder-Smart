<!DOCTYPE html>
<html>
<head>
    <title>Table</title>
    <link rel="stylesheet" type="text/css" href="../include/syllabus.css">
    <link rel="stylesheet" type="text/css" href="../include/style.css">
</head>
<body>
<div class="navbar">
    <a href="home.html">Home</a>
    <a href="applyLeave.php">Apply for Leave</a>
    <a href="markAttendance.php">Mark Attendance</a>
    <a class="active" href="viewSyllabus.php">View Syllabus</a>
</div>
<div class="table-title">
    <h3>Syllabus for 2018</h3>
</div>
<table class="table-fill">
    <thead>
    <tr>
        <th class="text-left">Time Period</th>
        <th class="text-center">Content</th>
        <th class="text-left">Status</th>
    </tr>
    </thead>
    <tbody class="table-hover">

    <?php

    require_once '../classes/syllabus.php';
    $content = $syllabus->getContent();

    foreach ($content as $row){
        echo "<tr><td class='text-left'>";
        echo ($row['start_date']." - ".$row['end_date']);
        echo "</td><td class='text-center'>";
        echo ($row['content']);
        echo "</td><td class='text-center'>";
        echo ($row['status']);
        echo "</td></tr>";
    }

    ?>

    </tbody>
</table>

</body>
</html>