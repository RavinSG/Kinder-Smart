<?php
	require_once("checklogin.inc.php");
	require_once("connectDB.php");
	if (!isset($_GET['note'])) {
		$_GET['note']="";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>privacy setting</title>
</head>
<body>
	
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
	      	<button  name="update">Update Password</button>
	      </div>

	    </form>
  </div>

	<?php

		if (!empty($_GET['note'])) {
		    echo $_GET['note'];
		}
	?>
</body>
</html>