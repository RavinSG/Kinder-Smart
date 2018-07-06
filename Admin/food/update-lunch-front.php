<?php
    require_once('../inc/checklogin.admin.inc.php'); 
	require_once('../../include/connection.inc.php');
	$query = "SELECT * FROM food_list";
	$result = mysqli_query($connection,$query);
 ?>

<!DOCTYPE html>

<?php ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update Lunch</title>
</head>
<body>
	<h1>Lunch Deatails</h1>
	<form action="update-lunch.php" method="POST">
        <label for="week"><h2>Select Week</h2></label>
        <select name="week" id="week">
            
        </select>
		<h2>Monday</h2>
		<label for="item-1">Item-1 : </label>
		<select name = "item-1">
            <?php while($row = mysqli_fetch_assoc($result)):;?>
            <option value="<?php echo $row['food'];?>"><?php echo $row['food'];?></option>
            <?php endwhile;
            	mysqli_data_seek($result, 0);
            ?>
        </select>
        <label for="item-2">Item-2 : </label>
		<select name = "item-2">
            <?php while($row = mysqli_fetch_assoc($result)):;?>
            <option value="<?php echo $row['food'];?>"><?php echo $row['food'];?></option>
            <?php endwhile;
            	mysqli_data_seek($result, 0);
            ?>
        </select>
        <label for="item-3">Item-3 : </label>
		<select name = "item-3">
            <?php while($row = mysqli_fetch_assoc($result)):;?>
            <option value="<?php echo $row['food'];?>"><?php echo $row['food'];?></option>
            <?php endwhile;
            mysqli_data_seek($result, 0)?>
        </select>

        <h2>Tuesday</h2>
		<label for="item-1">Item-1 : </label>
		<select name = "item-1">
            <?php while($row = mysqli_fetch_assoc($result)):;?>
            <option value="<?php echo $row['food'];?>"><?php echo $row['food'];?></option>
            <?php endwhile;
            	mysqli_data_seek($result, 0);
            ?>
        </select>
        <label for="item-2">Item-2 : </label>
		<select name = "item-2">
            <?php while($row = mysqli_fetch_assoc($result)):;?>
            <option value="<?php echo $row['food'];?>"><?php echo $row['food'];?></option>
            <?php endwhile;
            	mysqli_data_seek($result, 0);
            ?>
        </select>
        <label for="item-3">Item-3 : </label>
		<select name = "item-3">
            <?php while($row = mysqli_fetch_assoc($result)):;?>
            <option value="<?php echo $row['food'];?>"><?php echo $row['food'];?></option>
            <?php endwhile;
            mysqli_data_seek($result, 0)?>
        </select>

        <h2>Wednesday</h2>
		<label for="item-1">Item-1 : </label>
		<select name = "item-1">
            <?php while($row = mysqli_fetch_assoc($result)):;?>
            <option value="<?php echo $row['food'];?>"><?php echo $row['food'];?></option>
            <?php endwhile;
            	mysqli_data_seek($result, 0);
            ?>
        </select>
        <label for="item-2">Item-2 : </label>
		<select name = "item-2">
            <?php while($row = mysqli_fetch_assoc($result)):;?>
            <option value="<?php echo $row['food'];?>"><?php echo $row['food'];?></option>
            <?php endwhile;
            	mysqli_data_seek($result, 0);
            ?>
        </select>
        <label for="item-3">Item-3 : </label>
		<select name = "item-3">
            <?php while($row = mysqli_fetch_assoc($result)):;?>
            <option value="<?php echo $row['food'];?>"><?php echo $row['food'];?></option>
            <?php endwhile;
            mysqli_data_seek($result, 0)?>
        </select>

        <h2>Thursday</h2>
		<label for="item-1">Item-1 : </label>
		<select name = "item-1">
            <?php while($row = mysqli_fetch_assoc($result)):;?>
            <option value="<?php echo $row['food'];?>"><?php echo $row['food'];?></option>
            <?php endwhile;
            	mysqli_data_seek($result, 0);
            ?>
        </select>
        <label for="item-2">Item-2 : </label>
		<select name = "item-2">
            <?php while($row = mysqli_fetch_assoc($result)):;?>
            <option value="<?php echo $row['food'];?>"><?php echo $row['food'];?></option>
            <?php endwhile;
            	mysqli_data_seek($result, 0);
            ?>
        </select>
        <label for="item-3">Item-3 : </label>
		<select name = "item-3">
            <?php while($row = mysqli_fetch_assoc($result)):;?>
            <option value="<?php echo $row['food'];?>"><?php echo $row['food'];?></option>
            <?php endwhile;
            mysqli_data_seek($result, 0)?>
        </select>
        <h2>Friday</h2>
		<label for="item-1">Item-1 : </label>
		<select name = "item-1">
            <?php while($row = mysqli_fetch_assoc($result)):;?>
            <option value="<?php echo $row['food'];?>"><?php echo $row['food'];?></option>
            <?php endwhile;
            	mysqli_data_seek($result, 0);
            ?>
        </select>
        <label for="item-2">Item-2 : </label>
		<select name = "item-2">
            <?php while($row = mysqli_fetch_assoc($result)):;?>
            <option value="<?php echo $row['food'];?>"><?php echo $row['food'];?></option>
            <?php endwhile;
            	mysqli_data_seek($result, 0);
            ?>
        </select>
        <label for="item-3">Item-3 : </label>
		<select name = "item-3">
            <?php while($row = mysqli_fetch_assoc($result)):;?>
            <option value="<?php echo $row['food'];?>"><?php echo $row['food'];?></option>
            <?php endwhile;?>
        </select><br>
		<button type="submit">Submit</button>
	</form>
</body>
</html>