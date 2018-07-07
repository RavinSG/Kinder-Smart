<?php  
session_start();
require_once ("connection.inc.php");
$query="SELECT * FROM special_notes";
$rows= mysqli_query($connection,$query);
if (!$rows){
	die("Database query failed: " . mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		echo"<table cellspacing='2'>";
		echo"<tr>";
		echo "Date";
		echo "</tr>";
		echo "<tr>";
		echo "Message";
		echo "</tr>";
		foreach ($rows as $row) {
			$pIds=explode("|", $row['parent_id']);
			if (in_array("{$_SESSION['uid']}", $pIds)) {
				echo "<tr><td>";
            	echo $row['d'];
            	echo "</td><td>";
            	echo $row['message'];
            	echo "</td><td>";
            	echo "<br>";
			}
			
		}
		echo "</table>";

	?>
</body>
</html>
