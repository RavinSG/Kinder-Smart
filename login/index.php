<?php
    session_start();
    if (isset($_SESSION['uid'])){
        $url = "Location: ../{$_SESSION['type']}";
        header($url);
    }
	else if (isset($_COOKIE['uid']) && isset($_COOKIE['type'])){
		$_SESSION['uid'] = $_COOKIE['uid'];
		$type = $_COOKIE['type'];
		switch ($type) {
			case 'parent':
				header("Location: ../parent");
				exit();
				break;

			case 'admin':
				header("Location: ../admin");
                exit();
				break;

			case 'teacher':
				header("Location: ../teacher");
                exit();
				break;
			
			default:
				# code...
				break;
		}
	}

	else{
        header("Location: form.php");
	}
 ?>