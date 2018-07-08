<?php
	require_once("checklogin.inc.php");
	$connection = mysqli_connect('localhost','root','','kindersmart');
	if(mysqli_connect_errno()){
		echo "Connection failed! ". mysqli_connect_error();
		die();
	}
	$queryForSuperTable="SELECT * FROM super_table where uid='{$_SESSION['uid']}' and acc_type='{$_SESSION['type']}'";
	$q_rowFromSupperTable= mysqli_query($connection,$queryForSuperTable);
	if (!$q_rowFromSupperTable){
		die("Database query failed: " . mysqli_connect_error());
	}
	$rowFromSupperTable = mysqli_fetch_assoc($q_rowFromSupperTable);

	$queryForParentDB="SELECT * FROM parent_db where id='{$_SESSION['uid']}'";
	$qqueryForParentDB= mysqli_query($connection,$queryForParentDB);
	if (!$qqueryForParentDB){
		die("Database query failed: " . mysqli_connect_error());
	}
	$rowFromParentDB = mysqli_fetch_assoc($qqueryForParentDB);
?>