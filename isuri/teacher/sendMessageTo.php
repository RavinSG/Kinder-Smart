<?php  

$connection = mysqli_connect("localhost","root","","kindersmart");
if (!$connection){
	die("Database connection failed". mysqli_error());
}
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
$str = implode("|",$parents);
if (!$parents==NULL) {
	$sql = "INSERT INTO special_notes (parent_id, d, message) VALUES ('$str', '{$today}','{$_POST["message"]}')";
		$check=mysqli_query($connection,$sql);
		if (!$check){
			die("Database query failed: " . mysqli_connect_error());
		}
}
$note="Message has sent successfully";
header("Location: sentMessage.php?note={$note}");
?>