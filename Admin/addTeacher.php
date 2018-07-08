
<?php require_once('../inc/checklogin.admin.inc.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Teacher</title>
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

<div class="row">
    <form class="col s12" action="../../include/conToTeacher.php" method="post">
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input id="first" type="text" name="first" value=<?php echo $first; ?>>
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
        </div>

        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input id="email" type="text" name="email" value=<?php echo $email?>>
                <label for="email">Email</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input id="phone" type="tel" name="phone" value=<?php echo $phone?>>
                <label for="tel">Telephone number</label>
            </div>
        </div>

            
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input id="leave" type="number" name="leave" value="<?=$leave?>">
                <label for="leave">Leave</label>
            </div>
        </div>
            
        <div class="center">
            <input type="submit" name="submit" value="Submit">
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

        }elseif ($check == 'invalidemail'){
            echo "<p class = 'error'>Please enter a valid email address!</p>";

        }elseif ($check == 'successful'){
            echo "<p class = 'success'>You have been registered!</p>";
        }
    }


?>
</body>
</html>

