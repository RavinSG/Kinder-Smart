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
	<title>account setting</title>
</head>
<body>
		
	<div class="row">
    	<form class="col s12" action="updateAccount.php" method="post">

      		<div class="row">
        		<div class="input-field col s6">
          			<i class="material-icons prefix">account_circle</i>
          			<input id="full_name" type="text" name="full_name" pattern="[a-zA-Z]+" title="Please enter alphabetic characters only" required value=<?php echo $rowFromParentDB['full_name']?>>
          			<label for="full_name">Full Name</label>
        		</div>
      		</div>

      		<div class="row">
        		<div class="input-field col s6">
          			<i class="material-icons prefix">account_circle</i>
          			<input id="ini_name" type="text" name="ini_name" title="Please enter alphabetic characters only" pattern="[a-zA-Z.]+" required value=<?php echo $rowFromParentDB['ini_name']?>>
          			<label for="ini_name">Name with Initials</label>
        		</div>
        		<div class="input-field col s6">
          			<i class="material-icons prefix">phone</i>
          			<input id="nic" type="text" name="nic" size="10" minlength="10" maxlength="10" pattern="[0-9]{9}[V|X]" required value=<?php echo $rowFromParentDB['nic']?>>
          			<label for="nic">NIC number</label>
        		</div>
      		</div>

      		<div class="row">
        		<div class="input-field col s6">
          			<i class="material-icons prefix">account_circle</i>
          			<input id="address" type="text" name="address" required value=<?php echo $rowFromParentDB['address']?>>
          			<label for="address">Address</label>
        		</div>
      		</div>

      		<div class="row">
        		<div class="input-field col s6">
          			<i class="material-icons prefix">account_circle</i>
          			<input id="email" type="text" name="email" required pattern="[a-z0-9._%]+@[a-z0-9.]+\.[a-z]{2,3}$" title="e.g example@example.com" value=<?php echo $rowFromParentDB['email']?> >
          			<label for="email">Email</label>
        		</div>
        		<div class="input-field col s6">
          			<i class="material-icons prefix">phone</i>
          			<input id="occupation" type="text" name="occupation" required pattern="[a-zA-Z]+" title="Please enter alphabetic characters only" value=<?php echo $rowFromParentDB['occupation']?>>
          			<label for="occupation">Occupation</label>
        		</div>
      		</div>

      		<div class="row">
        		<div class="input-field col s6">
          			<i class="material-icons prefix">account_circle</i>
          			<input id="tele_no" type="text" name="tele_no" required size="15" minlength="10" pattern="[0-9+-]+" maxlength="15" title="Only numbers and +- can be entered" value=<?php echo $rowFromParentDB['tele_no']?>>
          			<label for="tele_no">Telephone Number</label>
        		</div>
        		<div class="input-field col s6">
          			<i class="material-icons prefix">phone</i>
          			<input id="mobile_no" type="text" name="mobile_no" size="15" minlength="10" maxlength="15" required pattern="[0-9+-]+" title="Only numbers and +- can be entered" value=<?php echo $rowFromParentDB['mobile_no']?>>
          			<label for="mobile_no">Mobile Number</label>
        		</div>
      		</div>

      		<div class="center">
      			<input type="submit" name="submit" value="Submit" />
      		</div>

    	</form>
  	</div>

	<?php
		if (!($_GET['note'])=="") {
			echo "<script>alert('{$_GET["note"]}')</script>";
		}
	?>
	
</body>
</html>