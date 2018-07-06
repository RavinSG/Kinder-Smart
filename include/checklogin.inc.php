<?php 
	session_start();
	if(!isset($_SESSION['uid'])){
		header("Location: /WebDevelopment/Kinder-Smart/v2/login/index.php?login=error_login");
	}
 ?>