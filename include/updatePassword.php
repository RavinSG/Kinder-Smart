<?php
	require_once("connectDB.php");
	$pw=sha1($_POST['old_password']);
	if (!($row['password']==$pw)) {
		$note="Curreent password is not correct.Try again";
		header("Location: privacySetting.php?note=$note");
	}

	if(isset($_POST['update'])){
		$new_password = $_POST['new_password'];
		$rePassword = $_POST['rePassword
		'];
		if((!(empty($new_password)||empty($rePassword))) && $new_password == $rePassword){
			$hashed_password = sha1($_POST['new_password']);
			$query = "SELECT id FROM super_table WHERE uid='{$_SESSION['uid']}' and password='{$_POST['old_password']}'";
			$result = mysqli_query($connection,$query);
			if(!mysqli_num_rows($result)){
                $query = "UPDATE super_table SET password = '{$hashed_password}' WHERE uid='{$_SESSION['uid']}' and acc_type='{$_SESSION['type']}'";
                $result = mysqli_query($connection,$query);
                $result = 0;
                $query = "UPDATE super_table SET pass_changed = '1' WHERE uid='{$_SESSION['uid']}' and acc_type='{$_SESSION['type']}'";
                $result = mysqli_query($connection,$query);

                if (!$result) {
                    $note="Database Connection Error";
                    header("Location: privacySetting.php?note=$note");
                }
                else{
                	$note="Password Changed";
                	header("Location: privacySetting.php?note=$note");
                }
            }
            else{
			    $note= "Same Credential exists! <br> <a href='changepassword.html'>Enter a different password</a>";
			    header("Location: privacySetting.php?note=$note");
            }
			
		}
		else{
			$note="Password confirmation doesn't match the password";
			header("Location: privacySetting.php?note=$note");
		}
	}
	echo "dfghjkl";
 ?>