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
</nav>
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