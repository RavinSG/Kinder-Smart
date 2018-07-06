<?php 
	session_start();
	if (isset($_SESSION['uid']) && isset($_SESSION['type'])) {
		if($_SESSION['type']=='admin'){
			require('home.php');}
	} 
	else {
		echo "You are logged out. <a href='../login'>Login Again</a>";

	}
print_r($_SESSION);
 ?>