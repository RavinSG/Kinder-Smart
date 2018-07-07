<?php 
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
		<form action="updateAccount.php" method="post">
			<label>Full Name :</label> <input type="text" name="full_name" pattern="[a-zA-Z]+" title="Please enter alphabetic characters only" required value=<?php echo $row['full_name']?> >
            <br />
            <label>Name with Initials:</label><input type="text" name="ini_name" title="Please enter alphabetic characters only" pattern="[a-zA-Z.]+" required value=<?php echo $row['ini_name']?>>
            <br />
            <label>NIC number :</label> <input type="text" name="nic" size="10" minlength="10" maxlength="10" pattern="[0-9]{9}[V|X]" required value=<?php echo $row['nic']?>>
            <br />
            <label>Address :</label> <input type="text" name="address" required value=<?php echo $row['address']?>>
            <br />
            <label>Email :</label> <input type="text" name="email" required pattern="[a-z0-9._%]+@[a-z0-9.]+\.[a-z]{2,3}$" title="e.g example@example.com" value=<?php echo $row['email']?> >
            <br />
            <label>Telephone Number :</label> <input type="text" name="tele_no" required size="15" minlength="10" pattern="[0-9+-]+" maxlength="15" title="Only numbers and +- can be entered" value=<?php echo $row['tele_no']?>>
            <br />
            <label>Mobile Number :</label> <input type="text" name="mobile_no" size="15" minlength="10" maxlength="15" required pattern="[0-9+-]+" title="Only numbers and +- can be entered" value=<?php echo $row['mobile_no']?>>
            <br />
			<label>Occupation :</label> <input type="text" name="occupation" required pattern="[a-zA-Z]+" title="Please enter alphabetic characters only" value=<?php echo $row['occupation']?>>
			<br />
			<input type="submit" name="submit" value="Submit" />
		</form>
	<?php
		if (!($_GET['note'])=="") {
			echo "<script>alert('{$_GET["note"]}')</script>";
		}
	?>
</body>
</html>