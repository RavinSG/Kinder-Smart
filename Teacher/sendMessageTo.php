<?php  

require_once('../include/connectDbaseMysql.php');
$query="SELECT * FROM children";
$children= mysqli_query($connection,$query);
if (!$children){
	die("Database query failed: " . mysqli_connect_error());
}
$today=date('y-m-d');
$parents = array();
foreach ($children as $row){
	if (isset($_POST["{$row['id']}"])){
		array_push($parents,$row["parent"]);	
	}
} 
if (sizeof($parents)==0) {
	$note="Please select children";
	header("Location: sentMessage.php?note={$note}&message={$_POST["message"]}");
	return;
}
else{
	$str = implode("|",$parents);
	$sql = "INSERT INTO special_notes (parent_id, d, message) VALUES ('$str', '{$today}','{$_POST["message"]}')";
		$check=mysqli_query($connection,$sql);
		if (!$check){
			die("Database query failed: " . mysqli_connect_error());
		}
}
$note="Message has sent successfully";
header("Location: sentMessage.php?note={$note}");
?>