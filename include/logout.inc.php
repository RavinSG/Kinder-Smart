<?php 
	session_start();
	$_SESSION = array();
	$_COOKIE = array();
	setcookie('uid','',time()-3600,"/");
	setcookie('type','',time()-3600,"/");
	session_destroy();
	header("Location: ../login");
 ?>