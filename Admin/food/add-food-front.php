<?php 
	require_once("../../include/connection.inc.php");
	require_once('../inc/checklogin.admin.inc.php');
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Add Food</title>
 </head>
 <body>
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
				<input type="text" name=<?php  echo "item-{$i}" ?>><br>
	 		<?php endwhile ?>
	 		<input type="submit" value="Submit">
	 	</form>
 	<?php endif;?>

 </body>
 </html>