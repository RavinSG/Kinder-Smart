<?php 
	$connection = mysqli_connect('localhost','root','','kindersmart');
	if(mysqli_connect_errno()){
		echo "Connection failed! ". mysqli_connect_error();
		die();
	}
	
 ?>