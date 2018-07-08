
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
<h2 class="center">Add Teacher</h2>
<?php
if (isset($_SESSION['add'])){
    $check = $_SESSION['add'];

    if ($check == 'error'){
        echo "<div class='center'><p class='btn red'>Please don't try to cheat!</p></div>";

    } elseif ($check == 'empty'){
        echo "<div class='center'><p class = 'btn red'>Please fill in all the details!</p></div>";

    }elseif ($check == 'invalidemail'){
        echo "<div class='center'><p class = 'btn red'>Please enter a valid email address!</p></div>";

    }elseif ($check == 'successful'){
        echo "<div class='center'><p class = 'btn green'>You have been registered!</p></div>";
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
                <input id="first" type="text" name="first" required value=<?php echo $first; ?>>
                <label for="first">First Name</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input id="last" type="text" name="last" value=<?php echo $last ?>>
                <label for="last">Last Name</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input id="nic" type="text" name="nic" value=<?php echo $nic ?>>
                <label for="nic">NIC number</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input id="email" type="text" name="email" value=<?php echo $email?>>
                <label for="email">Email</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input id="phone" type="tel" name="phone" value=<?php echo $phone?>>
                <label for="tel">Telephone number</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input id="leave" type="number" name="leave" value=<?php echo $leave?>>
                <label for="leave">Leave</label>
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

</body>
</html>

