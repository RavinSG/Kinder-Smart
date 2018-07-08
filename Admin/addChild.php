
<?php require_once('checklogin.admin.inc.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Child</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../style/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<?php include("navbar.admin.php");?>
<h2 align="center" style="margin-bottom: auto">Add Child</h2>

<?php

    if (isset($_GET['first'])){
        $first = $_GET['first'];
    } else {
        $first = "";
    }
    if(isset($_GET['last'])) {
        $last = $_GET['last'];
    } else {
        $last = "";
    }
    if(isset($_GET['age'])) {
        $age = $_GET['age'];
    } else {
        $age = "";
    }
    if(isset($_GET['contact'])) {
        $contact = $_GET['contact'];
    } else {
        $contact = "";
    }
    if(isset($_GET['parent'])){
        $parent = $_GET['parent'];
    } else {
        $parent = "";
    }
    ?>
<div class="container form">
<div class="row">
    <form class="col s12" action="../include/conToChildren.php" method="post">
        <div class="row">
            <div class="col s12 xl6">
                <div class="input-field">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="first" type="text" name="first" required class="validate" value=<?php echo $first ?>>
                    <label for="first">First Name</label>
                </div>
            </div>
            <div class="col s12 xl6">
                <div class="input-field">
                    <input id="last" type="text" name="last" required class="validate" value=<?php echo $last ?>>
                    <label for="last">Last Name</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">phone</i>
                <input id="contact" type="text" name="contact" required class="validate" value=<?php echo $contact ?>>
                <label for="contact">Phone Number</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">event</i>
                <input id="age" type="number" class="validate" required name="age" value=<?php echo $age ?>>
                <label for="age">Age</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6 xl6 offset-xl3">
                <i class="material-icons prefix">featured_video</i>
                <input id="parent" type="text" name="parent" class="validate" required value=<?php echo $parent ?>>
                <label for="parent">Parent ID</label>
            </div>
        </div>
        
        <div class="center">
            <input type="submit" value="Submit" name="submit" class="btn green">
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
        }); // end of document ready
    })(jQuery); // end of jQuery name space
</script>
<?php
if (!isset($_GET['add'])){
    exit();
}
else {
    $check = $_GET['add'];

    if ($check == 'error'){
        echo "<p class='error'>Please don't try to cheat!</p>";

    } elseif ($check == 'empty'){
        echo "<p class = 'error'>Please fill in all the details!</p>";

    }elseif ($check == 'ageError'){
        echo "<p class = 'error'>Please enter a valid age!</p>";

    }elseif ($check == 'nameError'){
        echo "<p class = 'error'>Please enter a valid name!</p>";

    }elseif ($check == 'contactError'){
        echo "<p class = 'error'>Please enter a valid contact number!</p>";

    }elseif ($check == 'successful'){
        echo "<p class = 'success'>The child has been registered!</p>";
    }
}
?>

</body>
</html>

