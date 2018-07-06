<?php 
$connection = mysqli_connect("localhost","root","","kindersmart");
if (!$connection){
	die("Database connection failed". mysqli_error());
}

if (!isset($_GET["note"])) {
	$_GET["note"]="";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sent Message</title>
</head>
<body>
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
            echo "<input type='checkbox' name='{$row["id"]}' value = '{$row["id"]}'></input>";
            $i++;
        }
        ?>
    </table>

	
        <h1>Send Message</h1>
        <fieldset>
		  <label>Message:</label>
		  <br>
          <input type="text" name="message" value="" required>
        </fieldset>
		
        <button type="submit">Send</button>
      </form>
      <?php 
      	echo $_GET["note"];
       ?>
</body>
</html>