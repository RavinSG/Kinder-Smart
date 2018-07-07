<?php  
session_start();
require_once ("connection.inc.php");
$query="SELECT * FROM special_notes";
$rows= mysqli_query($connection,$query);
if (!$rows){
	die("Database query failed: " . mysqli_connect_error());
}

$dates=array();
$messages=array();

foreach ($rows as $row) {
	$pIds=explode("|", $row['parent_id']);
	if (in_array("{$_SESSION['uid']}", $pIds)) {
		$viewIdsArray=explode("|", $row['viewIds']);
		$newViewIds="";
		if (!in_array("{$_SESSION['uid']}", $viewIdsArray)) {
			array_push($dates, $row['d']);
			array_push($messages, $row['message']);
			$newViewIds=$newViewIds."|"."{$_SESSION['uid']}";
			mysqli_query($connection,"UPDATE special_notes SET viewIds='{$newViewIds}' WHERE d='{$row["d"]}' and message='{$row["message"]}' and viewIds='{$row["viewIds"]}'");
		}
	}
}

?>