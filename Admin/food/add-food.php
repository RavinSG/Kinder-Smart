<?php 
	require_once('../inc/checklogin.admin.inc.php');
	require_once("../../include/connection.inc.php");
	if (isset($_POST['item-1'])) {
		$food_list = array();
		$query = "SELECT food from food_list";
		$result = mysqli_query($connection,$query);
		while ($food = mysqli_fetch_assoc($result)) {
			array_push($food_list, $food['food']);
		}
		foreach ($_POST as $item) {
			if (!(in_array($item, $food_list))) {
				$query = "INSERT INTO food_list (food) VALUES ('{$item}')";
				$result = mysqli_query($connection,$query);
			}
		}
	header("Location: ../food/add-food-front.php");
	}
	else{
		echo "Error! Login Again";
		echo "<meta http-equiv='refresh' content=\"3; URL='../../'\">";
	}
	

 ?>