<?php
session_start();
require_once ("checklogin.teacher.php")?>
<?php
require_once('../include/connection.inc.php');

if (!isset($_GET["note"])) {
	$_GET["note"]="";
}
if (!isset($_GET["message"])) {
    $_GET["message"]="";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sent Message</title>
    <link rel="stylesheet" type="text/css" href="../include/syllabus.css">
    <link rel="stylesheet" type="text/css" href="../include/style.css">
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
	<h1>Children List</h1>
	<table cellspacing="0">
        <tr>
            <th>Child ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Select</th>
        </tr>

        <?php
        $query="SELECT * FROM children";
		$children= mysqli_query($connection,$query);
		if (!$children){
			die("Database query failed: " . mysqli_connect_error());
		}?>
		<form action="sendMessageTo.php" method="post">
        <?php
        $i = 0;
        foreach ($children as $row){
            echo "<tr><td>";
            echo ($row['id']);
            echo "</td><td>";
            echo ($row['child_fname']);
            echo "</td><td>";
            echo ($row['child_lname']);
            echo "</td><td>";
            echo "<input type='checkbox' name='{$row["id"]}' value = '{$row["id"]}'>";
            $i++;
        }
        ?>
    </table>

	
        <h1>Send Message</h1>
        <fieldset>
		  <label>Message:</label>
		  <br>
            <textarea name="message" required value = <?php  echo $_GET["message"];?>></textarea>
        </fieldset>
		
        <button type="submit">Send</button>
      </form>
      <h1>
      <?php
      if (!$_GET["note"]=="") {
          echo "<script>alert('{$_GET["note"]}')</script>";
      }
       ?>
       <h1>
</body>
</html>