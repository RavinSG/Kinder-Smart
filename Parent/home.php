<?php 
	require_once ('../classes/KinderTeacher.php');
	require_once('../include/connection.inc.php');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Parent</title>
</head>
<body>
	<?php
	if (isset($_SESSION['parent'])) {
		$parent = $_SESSION['parent'];
		echo "Hello! ".$parent->getFullName();
		require('navbar.php');
	} 

	?>
</body>
</html>