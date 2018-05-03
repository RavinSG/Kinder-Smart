<?php
require_once('../classes/lunch.php');
require_once('../classes/homework.php');
require_once('../classes/SpecialNote.php');
session_start();
if (!isset($_SESSION['parent'])) {
    header("Location: ../Login/login.html?error=login");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Daily Details</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php include('navbar.php'); ?>
	<div class="wrapper">
		<h1 class="topic"> <?php 
			$tom = new DateTime('tomorrow');
			echo "Daily Details - ".$tom->format('Y/m/d'); ?> 
		</h1>
		
		<div class="lunch">
			<h2>Lunch Details</h2>
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
			<h2>Homework</h2>
			<p>
				<?php 
					$details = $homework->getDetails();
					echo $details;
				 ?>
			</p>
		</div>

		<div class="spec_note">
			<h2>Special Notes</h2>
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