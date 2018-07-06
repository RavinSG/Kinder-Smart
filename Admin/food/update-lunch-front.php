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
<div class="navbar">
    <a href="../home.php">Home</a>
    <a href="addTeacher.php">Add Teacher Info</a>
    <a class="active" href="addChild.php">Add Child</a>
    <a href="registration.parent.php">Register Parent</a>
    <a href="../viewLeave.php">Manage Leave</a>
    <a href="../food/update-lunch-front.php">Update Food</a>
</div>
<div class = "form">
	<h1>Lunch Deatails</h1>
	<form action="update-lunch.php" method="POST">
        <select name="str_date">
            <?php
                $query = "SELECT str_date,end_date FROM lunch";
                $res = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($res)):;
                    $monday = strtotime($row['str_date']);
                    $friday = strtotime($row['end_date']);
                     $mon = date('d M',$monday);
                     $fri = date('d M',$friday);
                ?>
                    <option value="<?php echo $row['str_date'];?>"><?php echo $mon.' - '.$fri;?></option>
                <?php endwhile; ?>
        </select>
		<h2>Monday</h2>
		<?php if(isset($_POST['mon_num'])){$_SESSION['mon_num']=$_POST['mon_num'];} ?>
		<?php if (isset($_SESSION['mon_num'])):; ?>
		  <?php global $i; $i=0; while($i<$_SESSION['mon_num']):; $i++; ?>

            <select name = <?php $name="mon-item-".strval($i) ; echo $name;?>>
                <?php while($row = mysqli_fetch_assoc($result)):;?>
                    <option value="<?php echo $row['food'];?>"><?php echo $row['food'];?></option>
                <?php endwhile;
                mysqli_data_seek($result, 0);
                ?>
            </select>
		  <?php endwhile ?>
		<?php endif ?>
		<?php if(!isset($_SESSION['mon_num'])):;?>
            <form action="update-lunch-front.php" method="POST">
                <label for="mon_num">Enter number of food items</label>
                <input type="number" name="mon_num" max="10" min="1" required>
                <input type="submit" formaction="update-lunch-front.php" value="Next">
            </form>
		<?php endif?>

        <h2>Tuesday</h2>
        <?php if(isset($_POST['tue_num'])){$_SESSION['tue_num']=$_POST['tue_num'];} ?>
        <?php if (isset($_SESSION['tue_num'])):; ?>
            <?php $i=0; while($i<$_SESSION['tue_num']):; $i++?>
                <select name = <?php $name="tue-item-".strval($i) ; echo $name;?>>
                    <?php while($row = mysqli_fetch_assoc($result)):;?>
                        <option value="<?php echo $row['food'];?>"><?php echo $row['food'];?></option>
                    <?php endwhile;
                    mysqli_data_seek($result, 0);
                    ?>
                </select>
            <?php endwhile ?>
        <?php endif ?>
        <?php if(!isset($_SESSION['tue_num'])):;?>
            <form action="update-lunch-front.php" method="POST">
                <label for="tue_num">Enter number of food items</label>
                <input type="number" name="tue_num" max="10" min="1" required>
                <input type="submit" formaction="update-lunch-front.php" value="Next">
            </form>
        <?php endif?>

        <h2>Wednesday</h2>
        <?php if(isset($_POST['wed_num'])){$_SESSION['wed_num']=$_POST['wed_num'];} ?>
        <?php if (isset($_SESSION['wed_num'])):; ?>
            <?php $i=0; while($i<$_SESSION['wed_num']):; $i++?>
                <select name = <?php $name="wed-item-".strval($i) ; echo $name;?>>
                    <?php while($row = mysqli_fetch_assoc($result)):;?>
                        <option value="<?php echo $row['food'];?>"><?php echo $row['food'];?></option>
                    <?php endwhile;
                    mysqli_data_seek($result, 0);
                    ?>
                </select>
            <?php endwhile ?>
        <?php endif ?>
        <?php if(!isset($_SESSION['wed_num'])):;?>
            <form action="update-lunch-front.php" method="POST">
                <label for="wed_num">Enter number of food items</label>
                <input type="number" name="wed_num" max="10" min="1" required>
                <input type="submit" formaction="update-lunch-front.php" value="Next">
            </form>
        <?php endif?>

        <h2>Thursday</h2>
        <?php if(isset($_POST['thurs_num'])){$_SESSION['thurs_num']=$_POST['thurs_num'];} ?>
        <?php if (isset($_SESSION['thurs_num'])):; ?>
            <?php $i=0; while($i<$_SESSION['thurs_num']):; $i++?>
                <select name = <?php $name="thurs-item-".strval($i) ; echo $name;?>>
                    <?php while($row = mysqli_fetch_assoc($result)):;?>
                        <option value="<?php echo $row['food'];?>"><?php echo $row['food'];?></option>
                    <?php endwhile;
                    mysqli_data_seek($result, 0);
                    ?>
                </select>
            <?php endwhile ?>
        <?php endif ?>
        <?php if(!isset($_SESSION['thurs_num'])):;?>
            <form action="update-lunch-front.php" method="POST">
                <label for="thurs_num">Enter number of food items</label>
                <input type="number" name="thurs_num" max="10" min="1" required>
                <input type="submit" formaction="update-lunch-front.php" value="Next">
            </form>
        <?php endif?>

        <h2>Friday</h2>
        <?php if(isset($_POST['fri_num'])){$_SESSION['fri_num']=$_POST['fri_num'];} ?>
        <?php if (isset($_SESSION['fri_num'])):; ?>
            <?php $i=0; while($i<$_SESSION['fri_num']):; $i++?>
                <select name = <?php $name="fri-item-".strval($i) ; echo $name;?>>
                    <?php while($row = mysqli_fetch_assoc($result)):;?>
                        <option value="<?php echo $row['food'];?>"><?php echo $row['food'];?></option>
                    <?php endwhile;
                    mysqli_data_seek($result, 0);
                    ?>
                </select>
            <?php endwhile ?>
        <?php endif ?>
        <?php if(!isset($_SESSION['fri_num'])):;?>
            <form action="update-lunch-front.php" method="POST">
                <label for="fri_num">Enter number of food items</label>
                <input type="number" name="fri_num" max="10" min="1" required>
                <input type="submit" formaction="update-lunch-front.php" value="Next">
            </form>
        <?php endif ?>

        <button type="submit" name="submit" value="submit">Submit</button>
	</form>
</div>
<div>
    <aside>
        <a href="add-food-front.php">Add New Food</a>
    </aside>
</div>
</body>
</html>