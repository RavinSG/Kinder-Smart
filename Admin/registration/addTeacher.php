
<?php require_once('../inc/checklogin.admin.inc.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Teacher</title>
    <link rel="stylesheet" href="../../include/style.css">
    <link rel="stylesheet" href="../../include/form.css">
</head>
<body>
<div class="navbar">
    <a href="../home.php">Home</a>
    <a class="active" href="addTeacher.php">Add Teacher Info</a>
    <a href="addChild.php">Add Child</a>
    <a href="registration.parent.php">Register Parent</a>
    <a href="registration.admin.php">Add Admin</a>
    <a href="../viewLeave.php">Manage Leave</a>
    <a href="../food/update-lunch-front.php">Update Food</a>
</div>
<h2>Add Teacher</h2>
<form action="../../include/conToTeacher.php" method="post">
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
    if(isset($_GET['email'])) {
        $email = $_GET['email'];
    } else {
        $email = "";
    }
    if(isset($_GET['phone'])) {
        $phone = $_GET['phone'];
    } else {
        $phone = "";
    }
    if(isset($_GET['nic'])){
        $nic = $_GET['nic'];
    } else {
        $nic = "";
    }
    if(isset($_GET['leave'])){
        $leave = $_GET['leave'];
    } else {
        $leave = "";
    }
    ?>
    <input type="text" name="first" placeholder="First Name"  value="<?=$first?>">
    <input type="text" name="last" placeholder="Last Name" value="<?=$last?>">
    <input type="text" name="email" placeholder="E-mail" value="<?=$email?>">
    <input type="text" name="nic" placeholder="National Identity Card No"  value="<?=$nic?>">
    <input type="tel" name="phone" placeholder="Phone Number" value="<?=$phone?>">
    <input type="number" name="leave" placeholder="Available leave" value="<?=$leave?>">


    <input type="submit" name="submit" value="Submit">

</form>

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

        }elseif ($check == 'invalidemail'){
            echo "<p class = 'error'>Please enter a valid email address!</p>";

        }elseif ($check == 'successful'){
            echo "<p class = 'success'>You have been registered!</p>";
        }
    }


?>
</body>
</html>

