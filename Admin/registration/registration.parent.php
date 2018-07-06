<?php require_once('../inc/checklogin.admin.inc.php'); ?>
<html>
	<head>
		<title>Parent Registration</title>
		<style>
		input[type="text"] {
			width:100px;
			height:30px;
			border-radius:5px;
			margin-left:2px;
			position:relative;
		}

		label{
			position:relative;
			width:300px;
			margin:20px;
			padding:5px;
			font-family:AR CENA;
			font-size:20px;
		}
		</style>
	</head>
	<body>
		<h1>Parent Registration</h1>
		<form action="register.parent.php" method="post">
			<label for='salutation'>Select Salutation</label>
			<select name="salutation" value=<?php echo $_SESSION['salutation'] ?>>
				<option name="salutation" value="Mr."> Mr. </option>
				<option name="salutation" value="Ms."> Ms. </option>
				<option name="salutation" value="Mrs."> Mrs. </option>
			</select>
			<br />
            <label>Full Name :</label> <input type="text" name="full_name" pattern="[a-zA-Z]+" title="Please enter alphabetic characters only" required value=<?php if(isset($_SESSION['admin_full_name'])){echo "{$_SESSION['admin_full_name']}";} else{echo "";}?> >
            <br />
            <label>Name with Initials:</label><input type="text" name="ini_name" title="Please enter alphabetic characters only" pattern="[a-zA-Z.]+" required value=<?php if(isset($_SESSION['admin_ini_name'])){echo "{$_SESSION['admin_ini_name']}";} else{echo "";}?>>
            <br />
            <label>NIC number :</label> <input type="text" name="nic" size="10" minlength="10" maxlength="10" pattern="[0-9]{9}[V|X]" required value=<?php if(isset($_SESSION['nic'])){echo "{$_SESSION['nic']}";} else{echo "";}?>  >
            <br />
            <label>Address :</label> <input type="text" name="address" required value= <?php if(isset($_SESSION['admin_address'])){echo "{$_SESSION['admin_address']}";} else{echo "";}?> >
            <br />
            <label>Email :</label> <input type="text" name="email" required pattern="[a-z0-9._%]+@[a-z0-9.]+\.[a-z]{2,3}$" title="e.g example@example.com" value=<?php if(isset($_SESSION['email'])){echo "{$_SESSION['email']}";} else{echo "";}?> >
            <br />
            <label>Telephone Number :</label> <input type="text" name="tele_no" required  minlength="10" pattern="[0-9+-]+" maxlength="15" title="Only numbers and +- can be entered" value=<?php if(isset($_SESSION['tele_no'])){echo "{$_SESSION['tele_no']}";} else{echo "";}?>>
            <label>Mobile Number :</label> <input type="text" name="mobile_no" minlength="10" maxlength="15" required pattern="[0-9+-]+" title="Only numbers and +- can be entered" value=<?php if(isset($_SESSION['mobile_no'])){echo "{$_SESSION['mobile_no']}";} else{echo "";}?> >
			<label>Occupation :</label> <input type="text" name="occupation" required pattern="[a-zA-Z]+" title="Please enter alphabetic characters only" value=<?php if(isset($_SESSION['occupation'])){echo "{$_SESSION['occupation']}";} else{echo "";}?>>
			<br />
			<input type="submit" name="submit" value="Submit" />
		</form>
	</body>
</html>