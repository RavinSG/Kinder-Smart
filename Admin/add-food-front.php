<?php 
	require_once("../include/connection.inc.php");
	require_once('checklogin.admin.inc.php');
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <link rel="stylesheet" href="../include/style.css">
 	<meta charset="UTF-8">
 	<title>Add Food</title>
 </head>
 <body>
 <div class="navbar">
     <a href="home.php">Home</a>
     <a href="addTeacher.php">Add Teacher Info</a>
     <a class="active" href="addChild.php">Add Child</a>
     <a href="registration.parent.php">Register Parent</a>
     <a href="registration.admin.php">Add Admin</a>
     <a href="viewLeave.php">Manage Leave</a>
     <a href="update-lunch-front.php">Update Food</a>
     <a href="../include/logout.inc.php">Logout</a>
 </div>
 	<?php if(!isset($_POST['number'])):;?>
	 	<h1>Add Food items to list</h1>
	 	<form action= "add-food-front.php" method="POST">
	 		<label for="number">Enter number of food items :</label>
	 		<input type="number" name="number" min = "1" max="10">
	 		<input type="submit" value="Next">
	 	</form>
 	<?php endif;?>
 	<?php if(isset($_POST['number'])):;?>
	 	<h1>Add Food items to list</h1>
	 	<form action="add-food.php" method="POST">
	 		<?php $i=0; while ( $i< $_POST['number']):; $i++;?>
				<label for=<?php echo "item-{$i}" ?>><?php echo "Item-{$i} : " ?></label>
				<input type="text" pattern="[a-zA-Z]+" title="Food name can contain alphabetic characters only" name=<?php  echo "item-{$i}" ?>><br>
	 		<?php endwhile ?>
	 		<input type="submit" value="Submit">
	 	</form>
 	<?php endif;
 	print_r($_SESSION);
 	?>

 </body>
 </html>