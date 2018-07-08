<?php
require_once ("checklogin.parent.php");
require_once('../include/connection.inc.php');
	date_default_timezone_set("Asia/Colombo");
	$noteForMethod="";
	$noteForDate="";
	$noteForTime="";
	//$removeTime=$_POST['remove_time'];
	$time=time();
	$currentTime=date('H:i:s',$time);


	if ($_POST["note"]=="") {
		$noteForMethod="Please fill the method of removal";
	}
	else{
		$nte=$_POST['note'];
	}
	if (!empty($_POST['remove_time'])) {
		$removeTime=$_POST['remove_time'];
	}
	
	if (empty($_POST["remove_date"])) {
		$noteForDate="Please select the date";
	}
	else{
		$removeDate=$_POST['remove_date'];
		if (strtotime($_POST["remove_date"])<strtotime(date('y-m-d'))){
			$noteForDate="The date is note valid";
		}
		elseif ($_POST['remove_date']>date('y-m-d',strtotime('+ 1 week'))) {
			$noteForDate="You can only request a date withing next week";
		}
		else{
			$dname= date("l", strtotime($removeDate));
			if ($dname=='Sunday' or $dname=='Saturday') {
				$noteForDate="The date is note valid. Please select a week day";
			}
			else{
				if(strtotime($_POST["remove_date"])==strtotime(date('y-m-d'))){
					if ($removeTime=='Morning') {
						$time1=date('H:i:s',strtotime("07:30:00"));
						if ($currentTime>$time1){
							$noteForTime="You can not request for child removal after 7:30 am. Please contact 0713304044 for more information";
						}
					}
					if ($removeTime=='Evening') {
						$time1=date('H:i:s',strtotime("12:00:00"));
						if ($currentTime<$time1){
							$noteForTime="You can not request for child removal after 12:00 . Please contact 0713304044 for more information";
						}
					}
				}
			}
		}
	}
	if (!$noteForMethod=="" or !$noteForDate=="" or !$noteForTime=="") {

		header("Location: child-remove-request.php?remove_date=$removeDate&note=$nte&remove_time=$removeTime&note_for_date=$noteForDate&note_for_method=$noteForMethod&note_for_time=$noteForTime");
		return;
	}
	$parent=$_SESSION['parent'];
	$child_id=$parent->getChildren()[0];
	$query="SELECT * FROM children where id='{$child_id}'";
	$remove_child= mysqli_query($connection,$query);
	if (!$remove_child){
		die("Database query failed: " . mysqli_connect_error());
	}
	$row = mysqli_fetch_assoc($remove_child);
	if ($row['remove']==1) {
		die("Your child has been already removed.");
	}
	
	mysqli_query($connection,"UPDATE children SET remove=1 WHERE id={$row['id']}");
	$sql = "INSERT INTO remove_children (child_id, child_name, method, remove_date, remove_time) VALUES ({$row['id']},{$row['child_fname']},{$_POST['note']},{$_POST['remove_date']},{$_POST['remove_time']})";
	mysqli_query($connection,$sql);
	echo "Successfully Sent";
    header("Location: child-remove-request.php?msg=success")
?>