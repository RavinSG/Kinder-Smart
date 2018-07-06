<?php
    session_start();
    require_once ("checklogin.teacher.php");
	$connection = mysqli_connect("localhost","root","","kindersmart");
	if (!$connection){
		die("Database connection failed". mysqli_error());
	}
	$today=date('y-m-d');
	$query="SELECT * FROM remove_children where child_id={$_GET['id']} AND remove_date={$today}";
	$remove_child= mysqli_query($connection,$query);
	print_r($remove_child);
	if (!$remove_child){
		die("Database query failed: " . mysqli_connect_error());
	}
	$row = mysqli_fetch_assoc($remove_child);

	if ($row['state']==0) {
		mysqli_query($connection,"UPDATE remove_children SET state=1 where child_id='{$_GET['id']}'AND remove_date='{$today}'");
	}
	header("Location: viewChildRemoveRequests.php");
	return;
?>