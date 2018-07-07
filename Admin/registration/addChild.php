
<?php require_once('../inc/checklogin.admin.inc.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Child</title>
    <link rel="stylesheet" href="../../include/style.css">
    <link rel="stylesheet" href="../form.css">
</head>
<body>
<div class="navbar">
    <a href="../home.php">Home</a>
    <a href="addTeacher.php">Add Teacher Info</a>
    <a class="active" href="addChild.php">Add Child</a>
    <a href="registration.parent.php">Register Parent</a>
    <a href="registration.admin.php">Add Admin</a>
    <a href="../viewLeave.php">Manage Leave</a>
    <a href="../food/update-lunch-front.php">Update Food</a>
</div>
<h2 align="center" style="margin-bottom: auto">Add Child</h2>
<form action="../../include/conToChildren.php" method="post">
    <ul style="margin-top: auto" class="form-style-1">
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

    echo '<li>
            <label>Full Name <span class="required">*</span></label>
            <input type="text" name="first" class="field-divided" placeholder="First" value='.$first.'>&nbsp;<input type="text" name="last" class="field-divided" placeholder="Last" value='.$last.'>
            </li>';
    echo '<li>
            <label>Phone Number <span class="required">*</span></label>
            <input type="text" name="contact" class="field-long" value='.$contact.'>
        </li>';
    echo '<li>
            <label>Age</label>
            <input type="number" class="field-divided" name="age" placeholder="Age" value='.$age.'>
        </li>';
    echo '<li>
            <label>Parent Name<span class="required">*</span></label>
            <input type="text" name="parent" class="field-long" value='.$parent.'>
        </li>';
    ?>
        <li style="margin-left: 150px;">
            <input style="width: 100px" type="submit" value="Submit" name="submit">
        </li>

    </ul>
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

    }elseif ($check == 'ageError'){
        echo "<p class = 'error'>Please enter a valid age!</p>";

    }elseif ($check == 'old'){
        echo "<p class = 'error'>Please enter an age suitable for a kindergarten child!</p>";

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

