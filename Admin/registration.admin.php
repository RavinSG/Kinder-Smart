<?php require_once('checklogin.admin.inc.php'); ?>
<html>
<head>
    <title>Admin Registration</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../style/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<?php include ("navbar.admin.php");?>
<h1 class="center">Admin Registration</h1>
<?php
    if(isset($_SESSION['admin_reg'])){
        $check = $_SESSION['admin_reg'];
        unset($_SESSION['admin_reg']);
        if($check == 'successful'){
            echo "<div class='center'><p class='btn green msg'>Admin registration successful</p></div>";
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
        <form class="col s12" action="register.admin.php" method="post">
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
                    <input id="ini_name" type="text" name="ini_name" pattern="[a-zA-Z]+" title="Please enter alphabetic characters only" required value=<?php if(isset($_SESSION['admin_ini_name'])){echo "{$_SESSION['admin_ini_name']}";} else{echo "";}?> >
                    <label for="ini_name">Name with Initials</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="full_name" type="text" name="full_name" title="Please enter alphabetic characters only" pattern="[a-zA-Z.]+" required value=<?php if(isset($_SESSION['admin_ini_name'])){echo "{$_SESSION['admin_ini_name']}";} else{echo "";}?>>
                    <label for="full_name">Full Name</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">home</i>
                    <input id="address" type="text" name="address" required value= <?php if(isset($_SESSION['admin_address'])){echo "{$_SESSION['admin_address']}";} else{echo "";}?> >
                    <label for="address">Address</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">email</i>
                    <input id="email" type="text" name="email" required pattern="[a-z0-9._%]+@[a-z0-9.]+\.[a-z]{2,3}$" title="e.g example@example.com" value=<?php if(isset($_SESSION['admin_email'])){echo "{$_SESSION['admin_email']}";} else{echo "";}?> >
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">chrome_reader_mode</i>
                    <input id="nic" type="text" name="nic" size="10" minlength="10" maxlength="10" pattern="[0-9]{9}[V|X]" required value=<?php if(isset($_SESSION['nic'])){echo "{$_SESSION['nic']}";} else{echo "";}?>  >
                    <label for="nic">NIC number</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">phone</i>
                    <input id="tele_no" type="text" name="tele_no" required size="15" minlength="10" pattern="[0-9+-]+" maxlength="15" title="Only numbers and +- can be entered" value=<?php if(isset($_SESSION['tele_no'])){echo "{$_SESSION['tele_no']}";} else{echo "";}?>>
                    <label for="tele_no">Telephone Number</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">phone_iphone</i>
                    <input id="mobile_no" type="text" name="mobile_no" size="15" minlength="10" maxlength="15" required pattern="[0-9+-]+" title="Only numbers and +- can be entered" value=<?php if(isset($_SESSION['mobile_no'])){echo "{$_SESSION['mobile_no']}";} else{echo "";}?> >
                    <label for="mobile_no">Mobile Number</label>
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