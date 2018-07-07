<?php
    require_once ("checklogin.parent.php");
	//include '../include/conToParentMessage.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>view messages</title>
	<link rel="stylesheet" href="../include/table.css">
</head>
<body>
    <?php
    	if ($dates==NULL or $messages==NULL) {
    		echo "No unread messages";
    	} else {
    		echo"<table cellspacing='2'>";
    		echo"<tr>";
    		echo "Date";
    		echo "</tr>";
    		echo "<tr>";
    		echo "Message";
    		echo "</tr>";
    		for ($i = 0; $i < sizeof($dates); $i++)
			{
    			echo "<tr><td>";
            	echo $dates[$i];
            	echo "</td><td>";
            	echo $messages[$i];
            	echo "</td><td>";
            	echo "<br>";
			}
			echo "</table>";
		}
	?>
	
</body>
</html>