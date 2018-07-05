<?php 
	require_once ('../classes/parent.php');
	require_once('../inc/connection.inc.php');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Parent</title>
</head>
<body>
	<?php
	if (isset($_SESSION['uid'])) {
		$parent = Parent_::getInstance($connection);
		echo "Hello! ".$parent->getFullName();
		require('navbar.parent.php');
	} 
	else {
		
	}
	
	?>
</body>
</html>