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
    <link rel="stylesheet" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<?php require("navbar.teacher.html");?>
	<h1 class="center">Children List</h1>
    <div class="container form">
        <div class="row">
        <form action="sendMessageTo.php" method="post" class="col s12 xl12">
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
            echo "<p><label>";
            echo "<input type='checkbox' name='{$row["id"]}' value = '{$row["id"]}'><span></span>";
            echo "</label></p>";
            $i++;
        }
        ?>
    </table>

    <br>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea name="message" placeholder="Enter the message(required)" id="message" required rows="10" class="materialize-textarea validate" value = <?php  echo $_GET["message"];?>></textarea>
                        <label for="message" class="black-text">Message:</label>
                    </div>
                </div>

        <div class="center">
        <button type="submit" class="btn green">Send</button>
        </div>
      </form>
    </div>

      <?php
      if (!$_GET["note"]=="") {
          echo "<script>alert('{$_GET["note"]}')</script>";
      }
       ?>

           <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
           <script type="text/javascript" src="../style/js/materialize.min.js"></script>
           <script>
               (function($){
                   $(function(){

                       $('.sidenav').sidenav();

                   }); // end of document ready
               })(jQuery); // end of jQuery name space

           </script>

</body>
</html>