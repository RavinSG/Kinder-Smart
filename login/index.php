<?php 
	if (isset($_COOKIE['uid']) && isset($_COOKIE['type'])){
		$_SESSION['uid'] = $_COOKIE['uid'];
		$type = $_COOKIE['type'];
		switch ($type) {
			case 'parent':
				header("Location: ../parent");
				break;

			case 'admin':
				header("Location: ../admin");
				break;

			case 'teacher':
				header("Location: ../teacher");
				break;
			
			default:
				# code...
				break;
		}
	}

	else{
		header("Location: form.html");
	}
 ?>