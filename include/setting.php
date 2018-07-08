<?php
	require_once("checklogin.inc.php");
	require_once("connectDB.php");
	if (!isset($_SESSION['noteForPassword'])) {
		$_SESSION['noteForPassword']="";
	}
	if (!isset($_SESSION['noteForDetails'])) {
		$_SESSION['noteForDetails']="";
	}
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../style/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="../Parent/style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>settings</title>
</head>
<body>
<nav>
    <div class="nav-wrapper blue">
        <a href="#" class="brand-logo left">KinderSmart</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="../Parent/index.php"><i class="material-icons left">home</i>Home</a></li>
            <li class="active"><a href="#"><i class="material-icons left">settings</i>Settings</a></li>
            <li class="red"><a href="../include/logout.inc.php"><i class="material-icons left">phonelink_erase</i>Logout</a></li>
        </ul>
    </div>
</nav>
	<h2 class="center">Account Details</h2>
    <div class="container form">
        <div class="center"><h5 class="btn green lighten-1 msg">Parent id: <?php echo $rowFromParentDB['id']?></h5></div>
    <div class="row">
    	<form class="col s12" action="updateAccount.php" method="post">

      		<div class="row">
        		<div class="input-field col s6">
          			<i class="material-icons prefix">account_circle</i>
          			<input id="full_name" type="text" name="full_name"  pattern="[a-zA-Z ]+" title="Please enter alphabetic characters only" required class="validate" class="validate" value=<?php echo $rowFromParentDB["full_name"]?>>
          			<label for="full_name">Full Name</label>
        		</div>
      		</div>

      		<div class="row">
        		<div class="input-field col s6">
          			<i class="material-icons prefix">account_circle</i>
          			<input id="ini_name" type="text" name="ini_name" title="Please enter alphabetic characters only" pattern="[a-zA-Z. ]+" required class="validate" value=<?php echo $rowFromParentDB['ini_name']?>>
          			<label for="ini_name">Name with Initials</label>
        		</div>
        		<div class="input-field col s6">
          			<i class="material-icons prefix">phone</i>
          			<input id="nic" type="text" name="nic" size="10" minlength="10" maxlength="10" pattern="[0-9]{9}[V|X]" required class="validate" value=<?php echo $rowFromParentDB['nic']?>>
          			<label for="nic">NIC number</label>
        		</div>
      		</div>

      		<div class="row">
        		<div class="input-field col s6">
          			<i class="material-icons prefix">account_circle</i>
          			<input id="address" type="text" name="address" required class="validate" pattern="[a-zA-Z0-9'].+" value=<?php echo $rowFromParentDB['address']?>>
          			<label for="address">Address</label>
        		</div>
      		</div>

      		<div class="row">
        		<div class="input-field col s6">
          			<i class="material-icons prefix">account_circle</i>
          			<input id="email" type="text" name="email" required class="validate" pattern="[a-z0-9._%]+@[a-z0-9.]+\.[a-z]{2,3}$" title="e.g example@example.com" value=<?php echo $rowFromParentDB['email']?> >
          			<label for="email">Email</label>
        		</div>
        		<div class="input-field col s6">
          			<i class="material-icons prefix">phone</i>
          			<input id="occupation" type="text" name="occupation" required class="validate" pattern="[a-zA-Z]+" title="Please enter alphabetic characters only" value=<?php echo $rowFromParentDB['occupation']?>>
          			<label for="occupation">Occupation</label>
        		</div>
      		</div>

      		<div class="row">
        		<div class="input-field col s6">
          			<i class="material-icons prefix">account_circle</i>
          			<input id="tele_no" type="text" name="tele_no" size="15" required class="validate" minlength="10" pattern="[0-9+-]+" maxlength="15" title="Only numbers and +- can be entered" value=<?php echo $rowFromParentDB['tele_no']?>>
          			<label for="tele_no">Telephone Number</label>
        		</div>
        		<div class="input-field col s6">
          			<i class="material-icons prefix">phone</i>
          			<input id="mobile_no" type="text" name="mobile_no" size="15" required class="validate" minlength="10" maxlength="15" pattern="[0-9+-]+" title="Only numbers and +- can be entered" value=<?php echo $rowFromParentDB['mobile_no']?>>
          			<label for="mobile_no">Mobile Number</label>
        		</div>
      		</div>

	      <div class="center">
	      	<button  name="update" class="btn green waves-effect waves-green">Update Details</button>
	      </div>

    	</form>
  	</div>


	<?php

        if (!empty($_SESSION['noteForDetails'])) {
            echo "<div class='center'><p class='btn red msg'>{$_SESSION['noteForDetails']}</p></div>";
            unset($_SESSION['noteForDetails']);
        }
    ?>

	<h2>Password Change</h2>
  	<div class="row">
	    <form class="col s12" action="updatePassword.php" method="post">

	      <div class="row">
	        <div class="input-field col s6">
	          <i class="material-icons prefix">account_circle</i>
	          <input id="old_password" type="password" name="old_password">
	          <label for="old_password">Old Password</label>
	        </div>
	      </div>

	      <div class="row">
	        <div class="input-field col s6">
	          <i class="material-icons prefix">account_circle</i>
	          <input  id="new_password" type="password" name="new_password">
	          <label for="new_password">New Password</label>
	        </div>
	        <div class="input-field col s6">
	          <i class="material-icons prefix">phone</i>
	          <input id="rePassword" type="password" name="rePassword">
	          <label for="rePassword">Confirm New Password</label>
	        </div>
	      </div>

	      <div class="center">
	      	<button  name="update" class="btn green waves-effect waves-green">Update Password</button>
	      </div>

	    </form>
  </div>

  	<?php
  		echo "<br>";
		if (!empty($_SESSION['noteForPassword'])) {
		    echo "<div class='center'><p class='btn red msg'>{$_SESSION['noteForPassword']}</p></div>";
		    unset($_SESSION['noteForPassword']);
		}
	?>
    </div>
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