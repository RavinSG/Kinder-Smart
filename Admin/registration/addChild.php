<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Child</title>
    <link rel="stylesheet" href="../../include/style.css">
    <link rel="stylesheet" href="../../include/form.css">
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
<h2>Add Child</h2>
<form action="../../include/conToChildren.php" method="post">
    <?php
    if(isset($_GET['first'])){
        $first = $_GET['first'];
        echo '<input type="text" name="first" placeholder="First Name"  value="'.$first.'">';
    }
    else{
        echo '<input type="text" name="first" placeholder="First Name">';
    }

    if(isset($_GET['last'])){
        $last = $_GET['last'];
        echo '<input type="text" name="last" placeholder="Last Name" value="'.$last.'">';
    }
    else{
        echo '<input type="text" name="last" placeholder="Last Name">';
    }

    if(isset($_GET['age'])){
        $age = $_GET['age'];
        echo '<input type="number" name="age" placeholder="Age" value="'.$age.'">';
    }
    else{
        echo '<input type="number" name="age" placeholder="Age">';
    }

    if(isset($_GET['contact'])){
        $contact = $_GET['contact'];
        echo '<input type="tel" name="contact" placeholder="Contact Number" value="'.$contact.'">';
    }
    else{
        echo '<input type="tel" name="contact" placeholder="Contact Number">';

    }

    if(isset($_GET['parent'])){
        $parent = $_GET['parent'];
        echo '<input type="text" name="parent" placeholder="Parent of Child" value="'.$parent.'">';
    }
    else{
        echo '<input type="text" name="parent" placeholder="Parent of Child">';

    }

    ?>
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

