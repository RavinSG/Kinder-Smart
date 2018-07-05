<?php 
	session_start();
	require_once('../include/connection.inc.php');

	if(isset($_POST['Submit'])){
		$newPassword = $_POST['newPassword'];
		$rePassword = $_POST['rePassword'];
		if((!(empty($newPassword)||empty($rePassword))) && $newPassword == $rePassword){
			$hashed_password = sha1($_POST['newPassword']);
			$query = "UPDATE parent_db SET password = '{$hashed_password}' WHERE id='{$_SESSION['uid']}'";
			$result = mysqli_query($connection,$query);

			$query = "UPDATE parent_db SET pass_changed = '1' WHERE id='{$_SESSION['uid']}'";
			$result = mysqli_query($connection,$query);

			if (!$result) {
				echo "Query Failed!";
			}
			else{
				header("Location : ../");
			}
			
		}
		else{
			echo "<h1>Error!</h1> <a href = 'changepassword.html'>Re-enter password</a>";
		}
	}
 ?>