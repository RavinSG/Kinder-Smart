<?php session_start();
if(!isset($_SESSION['uid'])){
    header("Location: index.php");
    exit();
}
require_once ("../include/connection.inc.php")?>
<DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Change Password</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../style/css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" href="style/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script>
		function checkForm(){
			var newPassword = document.getElementById('newPassword').value;
			var rePassword = document.getElementById('rePassword').value;
			var err_msg = document.getElementById('err_msg');
			if (newPassword != rePassword){
                err_msg.classList.add('btn red msg');
				err_msg.innerHTML = "Two passwords don't match.";
				return false;
			}
		}
	</script>
</head>
<body>
    <?php
        $query = "SELECT pass_changed FROM super_table WHERE email='{$_SESSION['email']}' and acc_type='{$_SESSION['type']}'";
        $result = mysqli_query($connection,$query);
        $row = mysqli_fetch_array($result);
        if(!$row[0]):;
    ?>
	<p>Your must change your password when you login for the first time.</p>
	<form action="changepassword.php" method="POST" onsubmit = "return checkForm();">
		<div class="input-field">
			<input type="password" name="newPassword" id="newPassword" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Password should contain at least 6 characters one lowercase and uppercase letters and one number">
			<label for="newPassword"> New Password : </label>
		</div>
		<div class="input-field">
			<input type="password" name="rePassword" id="rePassword" required >
			<label for="rePassword"> Re-Enter Password</label>
		</div>
		<div class="center">
			<input type="submit" name="Submit" value="Submit" class="btn green">
		</div>
	</form>
    <?php endif; ?>
    <?php  if($row[0]){header("Location: index.php");} ?>
    <?php
        if(isset($_SESSION['change_pass'])){
            if($_SESSION['change_pass'] == 'error'){
                echo  "<div class='center'><p class='btn red msg'>Two Passwords must match!</p></div>";
            }
            else{
                echo  "<div class='center'><p class='btn red msg'>Same Credential Exist! Enter different a password</p></div>";
            }
            unset($_SESSION['change_pass']);
        }
    ?>

	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../style/js/materialize.min.js"></script>
	<script>
        (function($){
            $(function(){

                $('.sidenav').sidenav();

            }); // end of document ready
        })(jQuery); // end of jQuery name space

	</script>
</body>
</html>