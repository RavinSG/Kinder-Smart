<?php
	session_start();
	$connection = mysqli_connect('localhost','root','','kindersmart');
	if(mysqli_connect_errno()){
		echo "Connection failed! ". mysqli_connect_error();
		die();
	}
	$query="SELECT * FROM super_table where uid='{$_SESSION['uid']}' and acc_type='{$_SESSION['type']}'";
	$remove_child= mysqli_query($connection,$query);
	if (!$remove_child){
		die("Database query failed: " . mysqli_connect_error());
	}
	$row = mysqli_fetch_assoc($remove_child);
?>