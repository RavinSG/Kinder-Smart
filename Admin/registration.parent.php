<?php require_once('checklogin.admin.inc.php'); ?>
<html>
	<head>
		<title>Parent Registration</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="../style/css/materialize.min.css"  media="screen,projection"/>
        <link rel="stylesheet" href="style/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
	<body>
    <?php include ("navbar.admin.php");?>
		<h1 class="center">Parent Registration</h1>
    <?php
    if(isset($_SESSION['parent_reg'])){
        $check = $_SESSION['parent_reg'];
        unset($_SESSION['parent_reg']);
        if($check == 'successful'){
            echo "<div class='center'><p class='btn green msg'>parent registration successful</p></div>";
        }
        else if($check == 'error'){
            echo "<div class='center'><p class='btn red msg'>Error! Try again with different email</p></div>";
        }
        else if($check == 'email'){
            echo "<div class='center'><p class='btn red msg'>This Admin Email Already Exist</p></div>";
        }
        else if($check == 'empty'){
            echo "<div class='center'><p class='btn red msg'>Fill all the fields</p></div>";
        }
        else if($check == 'invalidemail'){
            echo "<div class='center'><p class='btn red msg'>Enter a valid email</p></div>";
        }
        else{
            echo "<div class='center'><p class='btn red msg'>Invalid Details</p></div>";;
        }
    }
    ?>
        <div class="container form">
		<div class="row">
			<form class="col s12" action="register.parent.php" method="post">
				<div class="row">
					<div class="input-field col s3">
                        <i class="material-icons prefix">account_circle</i>
						<select name="salutation" required>
							<option name="salutation" value="Mr."> Mr. </option>
							<option name="salutation" value="Ms."> Ms. </option>
							<option name="salutation" value="Mrs."> Mrs. </option>
						</select>
                        <label>Salutation</label>
					</div>

                    <div class="input-field col s9">
                      <input id="ini_name" type="text" name="ini_name" pattern="[a-zA-Z. ]+" required class="validate" value=<?php if(isset($_SESSION['parent_ini_name'])){echo "{$_SESSION['parent_ini_name']}";} else{echo "";}?> >
                      <label for="ini_name">Name with Initials</label>
                        <span class="helper-text" data-error="Enter a valid input containing alphabetic characters only"></span>
                    </div>
                </div>
				<div class="row">
			    <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
			      <input id="full_name" type="text" name="full_name"  pattern="[a-zA-Z ]+" required class="validate" value=<?php if(isset($_SESSION['parent_ini_name'])){echo "{$_SESSION['parent_ini_name']}";} else{echo "";}?>>
			      <label for="full_name">Full Name</label>
                    <span class="helper-text" data-error="Enter a valid input containing alphabetic characters only"></span>
			    </div>
			  </div>

			  <div class="row">
		        <div class="input-field col s6">
		          <i class="material-icons prefix">chrome_reader_mode</i>
		          <input id="nic" type="text" name="nic" size="10" minlength="10" maxlength="10" pattern="[0-9]{9}[V|X|v|x]" class="validate" required value=<?php if(isset($_SESSION['nic'])){echo "{$_SESSION['nic']}";} else{echo "";}?>  >
		          <label for="nic">NIC number</label>
                    <span class="helper-text" data-error="Enter a valid nic number"></span>
		        </div>
		        <div class="input-field col s6">
		          <i class="material-icons prefix">home</i>
		          <input id="address" type="text" name="address" required pattern="[^*%$#@!]" class="validate" value= <?php if(isset($_SESSION['parent_address'])){echo "{$_SESSION['parent_address']}";} else{echo "";}?> >
		          <label for="address">Address</label>
                    <span class="helper-text" data-error="Enter a valid address"></span>
		        </div>
		      </div>

		      <div class="row">
		        <div class="input-field col s6">
		          <i class="material-icons prefix">email</i>
		          <input id="email" type="text" name="email" required class="validate" pattern="[a-z0-9._%]+@[a-z0-9.]+\.[a-z]{2,3}$" value=<?php if(isset($_SESSION['parent_email'])){echo "{$_SESSION['parent_email']}";} else{echo "";}?> >
		          <label for="email">Email</label>
                    <span class="helper-text" data-error="Enter a valid email. e.g example@example.com"></span>
		        </div>
		        <div class="input-field col s6">
		          <i class="material-icons prefix">work</i>
		          <input id="occupation" type="text" name="occupation" required class="validate" pattern="[a-zA-Z]+" value=<?php if(isset($_SESSION['occupation'])){echo "{$_SESSION['occupation']}";} else{echo "";}?>>
		          <label for="occupation">Occupation</label>
                    <span class="helper-text" data-error="Enter a valid input alphabetic characters only"></span>
		        </div>
		      </div>

		      <div class="row">
		        <div class="input-field col s6">
		          <i class="material-icons prefix">phone</i>
		          <input id="tele_no" type="text" name="tele_no" required class="validate" size="15" minlength="10" pattern="[0-9+-]+" maxlength="15" value=<?php if(isset($_SESSION['tele_no'])){echo "{$_SESSION['tele_no']}";} else{echo "";}?>>
		          <label for="tele_no">Telephone Number</label>
                    <span class="helper-text" data-error="Enter a valid phone number containing numbers and +- can be entered"></span>
		        </div>
		        <div class="input-field col s6">
		          <i class="material-icons prefix">phone_iphone</i>
		          <input id="mobile_no" type="text" name="mobile_no" class="validate" size="15" minlength="10" maxlength="15" required pattern="[0-9+-]+" title="Only numbers and +- can be entered" value=<?php if(isset($_SESSION['mobile_no'])){echo "{$_SESSION['mobile_no']}";} else{echo "";}?> >
		          <label for="mobile_no">Mobile Number</label>
                    <span class="helper-text" data-error="Enter a valid mobile number containing numbers and +-"></span>
		        </div>
		      </div>

		      <div class="center">
		      	<input type="submit" name="submit" value="Submit" class="btn green">
		      </div>
		      

			</form>
		</div>
    </div>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../style/js/materialize.min.js"></script>
    <script>
        (function($){
            $(function(){

                $('.sidenav').sidenav();
                $('select').formSelect()
            }); // end of document ready
        })(jQuery); // end of jQuery name space

    </script>
	</body>
</html>