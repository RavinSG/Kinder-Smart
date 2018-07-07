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

		if (!($_GET['note']=="")) {
			echo "<script>alert('{$_GET['note']}')</script>";
		}
	?>
</body>
</html>