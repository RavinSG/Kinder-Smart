<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kinder Smart</title>

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="../style/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
	<div class="container form">
		<div class="name center"><h1><span class="amber-text text-darken-4">Kinder</span>Smart</h1></div>
        <?php
        if(isset($_SESSION['login'])){
            $check = $_SESSION['login'];
            unset($_SESSION['login']);
            if($check == 'error'){
                echo "<div class='center'><p class='btn red msg'>Wrong Credentials</p></div>";
            }
            else{
                echo "<div class='center'><p class='btn red msg'>Enter Valid Email and Password</p></div>";
            }
        }
        ?>
		<div class="login">
			<img src="" alt="">
			<div class="row">
			<form action="validate.php" method='POST'>
				<div class="row">
					<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input id="email" type="text" name="email" class="validate" required>
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<i class="material-icons prefix">lock</i>
						<input id="password" type="password" name="password" class="validate" required>
						<label for="password">Password</label>
					</div>
				</div>
				<div class="center"><label><input type="checkbox" name="remember" value="remember"><span>Keep me logged in</span></label></div><br>
				<div class="center"><button type="submit" class="btn green white-text">Login</button></div>
			</form>
				<p id="err_msg"></p>
			</div>

			<p>Forgot login details? <a href="recovery.php">Click Here</a></p>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../style/js/materialize.min.js"></script>
</body>
</html>

