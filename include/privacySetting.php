<?php
	require_once("connectDB.php");
	if (!isset($_GET['note'])) {
		$_GET['note']="";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>privacy setting</title>
</head>
<body>
	
	<form action="updatePassword.php" method="post">
		Old Password: <input type="password" name="old_password">
		</br>
		New Password: <input type="password" name="new_password">
		</br>
		Confirm New Password: <input type="password" name="rePassword">
		</br>
		<button  name="update">Update</button>
	</form>
	<?php

		if (!empty($_GET['note'])) {
		    echo $_GET['note'];
		}
	?>
</body>
</html>