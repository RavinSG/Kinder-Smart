<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>About</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php include('navbar.php'); ?>
	<h1>Nursery Name</h1>
	<h2>Our Vision</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo architecto quaerat, non fugiat eos aspernatur repellat voluptate, rerum blanditiis provident dolore nesciunt optio aliquid, reprehenderit reiciendis, voluptatibus corrupti voluptatem sequi!</p>
	<h2>Our Mission</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam deleniti, sapiente dignissimos soluta. Quibusdam odio, velit aut esse perspiciatis veritatis incidunt! Qui vero praesentium facilis eligendi provident neque, quasi commodi.</p>
	<h2>Contact Us</h2>
	<form action="RecordMessage.php" method="POST">
	<label for="message"></label>
	<textarea name="message" id="message" cols="30" rows="10" placeholder="Enter Your Message Here"></textarea><br>
	<input type="submit" value="Submit">
	</form>
	<hr>
	<footer>
		<p>email : email@server.com</p>
		<p>fax : +94 xx xxxxxxx</p>
		<p>tele no : +94 xx xxxxxxx</p>
	</footer>
</body>
</html>