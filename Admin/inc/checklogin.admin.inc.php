<?php 
	session_start();
	if(!(isset($_SESSION['uid']) && isset($_SESSION['type']))){
		if ($_SESSION['type'] != 'admin') {
			header("Location: /WebDevelopment/Kinder-Smart/v2/login/index.html");
		}
	
	}
 ?>