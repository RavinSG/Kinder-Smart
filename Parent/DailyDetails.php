<?php
require_once('../classes/lunch.php');
require_once('../classes/homework.php');
require_once('../classes/SpecialNote.php');
require_once ("checklogin.parent.php");
include("navbar.parent.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Daily Details</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../style/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<div class="container">
		<h1 class="topic center"> <?php
			$tom = new DateTime('today');
			echo "Daily Details - ".$tom->format('Y/m/d'); ?> 
		</h1>
		
		<div class="lunch">
			<h3 class="center">Tomorrow Lunch Details</h3>
			<p>
				<?php 
					$food_list = $lunch->getFoodList();
					foreach ($food_list as $food) {
						echo "{$food}.<br>";
					}
				 ?>
			</p>
		</div>

		<div class="homework">
			<h3 class="center">Homework</h3>
			<p>
				<?php 
					$details = $homework->getDetails();
					echo $details;
				 ?>
			</p>
		</div>

		<div class="spec_note">
			<h3 class="center">Special Notes</h3>
			<p>
				<?php 
					$details = $spec_note->getDetails();
					echo $details;
				 ?>
			</p>
		</div>
	</div>
</body>
</html>