<?php 
	session_start();
    include_once '../classes/KinderParent.php';
	function validate($table,$connection,$email,$hashed_password){
		$query = "SELECT * FROM {$table} WHERE email = '".mysqli_real_escape_string($connection,$email)."' and password = '".mysqli_real_escape_string($connection,$hashed_password)."'";
		$result = mysqli_query($connection,$query);
		
		if (mysqli_num_rows($result)) {
		 	$array = mysqli_fetch_assoc($result);
		 	$_SESSION['uid'] = $array['id'];
		 	if(isset($_POST['remember'])){
		 		setcookie('uid',$array['id'],time()+60*60*24*30,"/");
		 	}
		 	
			echo "Login Succesful";
			return $array;
		 	
		 }
		 return false;

	}

	if(isset($_POST['email']) && isset($_POST['password'])){
		$email = trim($_POST['email']);
		$password = $_POST['password'];

		require_once("../include/connection.inc.php");
		if ((!(empty($email) || empty($password)) && filter_var($email,FILTER_VALIDATE_EMAIL))) {
			$hashed_password = sha1($password);			
			
			if($array = validate("parent_login",$connection,$email,$hashed_password)){
                $parent = new KinderParent($array['id']);
                $_SESSION['parent'] = $parent;
				if (isset($_POST['remember'])) {
					setcookie('type','parent',time()+60*60*24*30,"/");
				}
				header("Location: ../parent");
			}
			else if ($array = validate("admin_db",$connection,$email,$hashed_password)){
				if (isset($_POST['remember'])) {
					setcookie('type','admin',time()+60*60*24*30,"/");
				}
				header("Location: ../admin");
			}
			else if($array = validate("teacher_db",$connection,$email,$hashed_password)){
				if (isset($_POST['remember'])) {
					setcookie('type','teacher',time()+60*60*24*30,"/");
				}
				header("Location: ../teacher");
			}
			else{
				echo "Wrong credentials";
			}
		} 
		else {
			echo ('<h1>Enter valid email and password</h1><h2><a href = "../">Click here</a> to go to login page</h2>');
		}		
	}
	else{
			echo "fieds are empty";
			echo '<meta http-equiv="refresh" content=" 4; url=/WebDevelopment/Kinder-Smart/v2">';
		}
	
 ?>