
<?php require_once('checklogin.admin.inc.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Child</title>
    <link rel="stylesheet" href="../include/style.css">
    <link rel="stylesheet" href="form.css">
</head>
<body>
<div class="navbar">
    <a href="index.php">Home</a>
    <a href="addTeacher.php">Add Teacher Info</a>
    <a class="active" href="addChild.php">Add Child</a>
    <a href="registration.parent.php">Register Parent</a>
    <a href="registration.admin.php">Add Admin</a>
    <a href="viewLeave.php">Manage Leave</a>
    <a href="update-lunch-front.php">Update Food</a>
</div>
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

<div class="row">
    <form class="col s12" action="../include/conToChildren.php" method="post">
    
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">phone</i>
                <input id="first" type="text" name="first" class="field-divided" value=<?php echo $first ?>>
                <input type="text" name="last" class="field-divided" value='.$last.'>
                <label for="first">Full Name <span class="required">*</span></label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">phone</i>
                <input id="contact" type="text" name="contact" class="field-long" value=<?php echo $contact ?>>
                <label for="contact">Phone Number <span class="required">*</span></label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">phone</i>
                <input id="age" type="number" class="field-divided" name="age" value=<?php echo $age ?>>
                <label for="age">Age</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">phone</i>
                <input id="parent" type="text" name="parent" class="field-long" value=<?php echo $parent ?>>
                <label for="parent">Parent ID<span class="required">*</span></label>
            </div>
        </div>
        
        <div class="center">
            <input type="submit" value="Submit" name="submit">
        </div>
               
    </form>
</div>

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

