<?php
	require_once("checklogin.inc.php");   
	require_once("connectDB.php");
    session_start();
	$note="";

	if (empty($_POST['full_name']) or empty($_POST['ini_name']) or empty($_POST['nic']) or empty($_POST['email']) or empty($_POST['address'])) {
		$note="Fill all details";
	} else {
		if (!($_POST['full_name']==$row['full_name'])) {
			mysqli_query($connection,"UPDATE parent_db SET full_name='{$_POST['full_name']}'  WHERE id={$rowFromParentDB['id']}");
		}
		if (!($_POST['ini_name']==$row['ini_name'])) {
			mysqli_query($connection,"UPDATE parent_db SET ini_name='{$_POST['ini_name']}'  WHERE id={$rowFromParentDB['id']}");
		}
		if (!($_POST['nic']==$row['nic'])) {
			mysqli_query($connection,"UPDATE parent_db SET nic='{$_POST['nic']}'  WHERE id={$rowFromParentDB['id']}");
		}
		if (!($_POST['email']==$row['email'])) {
			mysqli_query($connection,"UPDATE parent_db SET email='{$_POST['email']}'  WHERE id={$rowFromParentDB['id']}");
			mysqli_query($connection,"UPDATE super_table SET email='{$_POST['email']}'  WHERE id={$rowFromParentDB['id']}");
		}
		if (!($_POST['address']==$row['address'])) {
			mysqli_query($connection,"UPDATE parent_db SET address='{$_POST['address']}'  WHERE id={$rowFromParentDB['id']}");
		}
		if (!($_POST['tele_no']==$row['tele_no'])) {
			mysqli_query($connection,"UPDATE parent_db SET tele_no='{$_POST['tele_no']}'  WHERE id={$row['id']}");
		}
		if (!($_POST['mobile_no']==$row['mobile_no'])) {
			mysqli_query($connection,"UPDATE parent_db SET mobile_no='{$_POST['mobile_no']}'  WHERE id={$rowFromParentDB['id']}");
		}
		if (!($_POST['occupation']==$row['occupation'])) {
			mysqli_query($connection,"UPDATE parent_db SET occupation='{$_POST['occupation']}'  WHERE id={$rowFromParentDB['id']}");
		}
	}
	if ($note=="") {
		$note="Details updated successfuly";
	}
	$_SESSION['noteForDetails'] = $note;
	header("Location: setting.php");
?>