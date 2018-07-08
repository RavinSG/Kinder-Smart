<?php 
	session_start();
	require_once('../include/connection.inc.php');
	if(isset($_POST['Submit'])){
		$newPassword = $_POST['newPassword'];
		$rePassword = $_POST['rePassword'];
		if((!(empty($newPassword)||empty($rePassword))) && $newPassword == $rePassword){
			$hashed_password = sha1($_POST['newPassword']);
			$query = "SELECT id FROM super_table WHERE email='{$_SESSION['email']}' and password='{$hashed_password}'";
			$result = mysqli_query($connection,$query);
			if(!mysqli_num_rows($result)){
                $query = "UPDATE super_table SET password = '{$hashed_password}' WHERE uid='{$_SESSION['uid']}' and acc_type='{$_SESSION['type']}'";
                $result = mysqli_query($connection,$query);
                $result = 0;
                $query = "UPDATE super_table SET pass_changed = '1' WHERE uid='{$_SESSION['uid']}' and acc_type='{$_SESSION['type']}'";
                $result = mysqli_query($connection,$query);

                if (!$result) {
                    echo "Query Failed!";
                }
                else{

                    header("Location: ../{$_SESSION['type']}");
                }
            }
            else{
                $_SESSION['change_pass']= "same_cred";
			    header("Location: changepassword-front.php");
            }
			
		}
		else{
		    $_SESSION['change_pass']= "error";
            header("Location: changepassword-front.php");
		}
	}
 ?>