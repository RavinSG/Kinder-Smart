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
 <?php include ("navbar.admin.php");?>
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
 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 <script type="text/javascript" src="../style/js/materialize.min.js"></script>
 <script>
     (function($){
         $(function(){

             $('.sidenav').sidenav();

         }); // end of document ready
     })(jQuery); // end of jQuery name space

 </script>
 </body>
 </html>