
<?php require_once('checklogin.admin.inc.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Teacher Registration</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../style/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<?php require("navbar.admin.php");?>
<h1 class="center">Add Teacher</h1>
<?php
if (isset($_SESSION['add'])){
    $check = $_SESSION['add'];
    unset($_SESSION['add']);

    if ($check == 'error'){
        echo "<p class='btn red'>Please don't try to cheat!</p>";

    } elseif ($check == 'empty'){
        echo "<p class = 'btn red'>Please fill in all the details!</p>";

    }elseif ($check == 'invalidemail'){
        echo "<p class = 'btn red'>Please enter a valid email address!</p>";

    }elseif ($check == 'successful'){
        echo "<p class = 'btn green'>You have been registered!</p>";
    }
}
?>

<?php
$first = "";
if (isset($_GET['first'])){
    $first = $_GET['first'];
}
$last = "";
if(isset($_GET['last'])) {
    $last = $_GET['last'];
}
$email = "";
if(isset($_GET['email'])) {
    $email = $_GET['email'];
}
$phone = "";
if(isset($_GET['phone'])) {
    $phone = $_GET['phone'];
}
$nic = "";
if(isset($_GET['nic'])){
    $nic = $_GET['nic'];
}
$leave = "";
if(isset($_GET['leave'])){
    $leave = $_GET['leave'];
}
?>
<div class="container form">
    <div class="row">
    <form class="col s12" action="../include/conToTeacher.php" method="post">
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input id="first" type="text" name="first" required class="validate" value=<?php echo $first; ?>>
                <label for="first">First Name</label>
            </div>
            <div class="input-field col s6">
                <input id="last" type="text" name="last" required class="validate" value=<?php echo $last ?>>
                <label for="last">Last Name</label>
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
                <i class="material-icons prefix">email</i>
                <input id="email" type="text" name="email" required class="validate" pattern="[a-z0-9._%]+@[a-z0-9.]+\.[a-z]{2,3}$" value=<?php if(isset($_SESSION['parent_email'])){echo "{$_SESSION['parent_email']}";} else{echo "";}?> >
                <label for="email">Email</label>
                <span class="helper-text" data-error="Enter a valid email. e.g example@example.com"></span>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">phone</i>
                <input id="tele_no" type="text" name="tele_no" required class="validate" size="15" minlength="10" pattern="[0-9+-]+" maxlength="15" value=<?php if(isset($_SESSION['tele_no'])){echo "{$_SESSION['tele_no']}";} else{echo "";}?>>
                <label for="tele_no">Telephone Number</label>
                <span class="helper-text" data-error="Enter a valid phone number containing numbers and +-"></span>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">home</i>
                <input id="address" type="text" name="address" required pattern="[^*%$#@!]+" class="validate" value= <?php if(isset($_SESSION['parent_address'])){echo "{$_SESSION['parent_address']}";} else{echo "";}?> >
                <label for="address">Address</label>
                <span class="helper-text" data-error="Enter a valid address"></span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6 offset-s3">
                <i class="material-icons prefix">date_range</i>
                <input id="leave" type="number" name="leave" required class="validate" value=<?php echo $leave?>>
                <label for="leave">Available no. of leaves</label>
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

