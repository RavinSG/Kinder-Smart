<?php
   require_once('checklogin.admin.inc.php');
	require_once('../include/connection.inc.php');

	$query = "SELECT * FROM food_list";
	$result = mysqli_query($connection,$query);

 ?>

<!DOCTYPE html>

<?php ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../style/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Update Lunch</title>
</head>
<body>
<?php include ("navbar.admin.php");?>
<div class="">
    <h1 class="center">Lunch Deatails</h1>
    <div class="center">
        <?php
        if(isset($_GET['check'])){
            echo "<p class='btn green'>Record added successfully</p>";
        }
        ?>
    </div>
    <a href="add-food-front.php" class="btn right waves-effect">Add New Food</a><br><br>
    <a href="resetSession.php" class="btn right waves-effect">Reset Form</a>
</div>
<div class = "container form">
    <div class="row">
	<form action="update-lunch.php" method="POST">
        <div class="input-field">
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
        <label>Select the Week</label>
        </div>
		<h3>Monday</h3>
		<div class="row">
		<?php if(isset($_POST['mon_num'])){$_SESSION['mon_num']=$_POST['mon_num'];} ?>
		<?php if (isset($_SESSION['mon_num'])):; ?>
		  <?php global $i; $i=0; while($i<$_SESSION['mon_num']):; $i++; ?>
            <div class="col s2">
            <select name = <?php $name="mon-item-".strval($i) ; echo $name;?>>
                <?php while($row = mysqli_fetch_assoc($result)):;?>
                    <option value="<?php echo $row['food'];?>"><?php echo $row['food'];?></option>
                <?php endwhile;
                mysqli_data_seek($result, 0);
                ?>
            </select>
            </div>
		  <?php endwhile ?>
		<?php endif ?>
        </div>
		<?php if(!isset($_SESSION['mon_num'])):;?>
            <form action="update-lunch-front.php" method="POST">
                Enter number of food items :
                <div class="input-field inline">
                    <input type="number" name="mon_num" max="10" min="0" required>
                    <label for="mon_num">No of Items</label>
                </div>
                <input type="submit" formaction="update-lunch-front.php" class="btn amber lighten-1 white-text" value="Next">
            </form>
		<?php endif?>

        <h3>Tuesday</h3>
        <div class="row">
        <?php if(isset($_POST['tue_num'])){$_SESSION['tue_num']=$_POST['tue_num'];} ?>
        <?php if (isset($_SESSION['tue_num'])):; ?>
            <?php $i=0; while($i<$_SESSION['tue_num']):; $i++?>
                <div class="col s2">
                <select name = <?php $name="tue-item-".strval($i) ; echo $name;?>>
                    <?php while($row = mysqli_fetch_assoc($result)):;?>
                        <option value="<?php echo $row['food'];?>"><?php echo $row['food'];?></option>
                    <?php endwhile;
                    mysqli_data_seek($result, 0);
                    ?>
                </select>
                </div>
            <?php endwhile ?>
        <?php endif ?>
        </div>
        <?php if(!isset($_SESSION['tue_num'])):;?>
            <form action="update-lunch-front.php" method="POST">
                Enter number of food items :
                <div class="input-field inline">
                    <input type="number" name="tue_num" max="10" min="0" required>
                    <label for="tue_num">No of Items</label>
                </div>
                <input type="submit" formaction="update-lunch-front.php" class="btn amber lighten-1 white-text" value="Next">
            </form>
        <?php endif?>

        <h3>Wednesday</h3>
        <div class="row">
        <?php if(isset($_POST['wed_num'])){$_SESSION['wed_num']=$_POST['wed_num'];} ?>
        <?php if (isset($_SESSION['wed_num'])):; ?>
            <?php $i=0; while($i<$_SESSION['wed_num']):; $i++?>
                <div class="col s2">
                <select name = <?php $name="wed-item-".strval($i) ; echo $name;?>>
                    <?php while($row = mysqli_fetch_assoc($result)):;?>
                        <option value="<?php echo $row['food'];?>"><?php echo $row['food'];?></option>
                    <?php endwhile;
                    mysqli_data_seek($result, 0);
                    ?>
                </select>
            </div>
            <?php endwhile ?>
        <?php endif ?>
        </div>
        <?php if(!isset($_SESSION['wed_num'])):;?>
            <form action="update-lunch-front.php" method="POST">
                Enter number of food items :
                <div class="input-field inline">
                    <input type="number" name="wed_num" max="10" min="0" required>
                    <label for="wed_num">No of Items</label>
                </div>
                <input type="submit" formaction="update-lunch-front.php" class="btn amber lighten-1 white-text" value="Next">
            </form>
        <?php endif?>

        <h3>Thursday</h3>
        <div class="row">
        <?php if(isset($_POST['thurs_num'])){$_SESSION['thurs_num']=$_POST['thurs_num'];} ?>
        <?php if (isset($_SESSION['thurs_num'])):; ?>
            <?php $i=0; while($i<$_SESSION['thurs_num']):; $i++?>
            <div class="col s2">
                <select name = <?php $name="thurs-item-".strval($i) ; echo $name;?>>
                    <?php while($row = mysqli_fetch_assoc($result)):;?>
                        <option value="<?php echo $row['food'];?>"><?php echo $row['food'];?></option>
                    <?php endwhile;
                    mysqli_data_seek($result, 0);
                    ?>
                </select>
            </div>
            <?php endwhile ?>
        <?php endif ?>
        </div>
        <?php if(!isset($_SESSION['thurs_num'])):;?>
            <form action="update-lunch-front.php" method="POST">
                Enter number of food items :
                <div class="input-field inline">
                    <input type="number" name="thurs_num" max="10" min="0" required>
                    <label for="thurs_num">No of Items</label>
                </div>
                <input type="submit" formaction="update-lunch-front.php" class="btn amber lighten-1 white-text" value="Next">
            </form>
        <?php endif?>

        <h3>Friday</h3>
        <div class="row">
        <?php if(isset($_POST['fri_num'])){$_SESSION['fri_num']=$_POST['fri_num'];} ?>
        <?php if (isset($_SESSION['fri_num'])):; ?>
            <?php $i=0; while($i<$_SESSION['fri_num']):; $i++?>
                <div class="col s2">
                <select name = <?php $name="fri-item-".strval($i) ; echo $name;?>>
                    <?php while($row = mysqli_fetch_assoc($result)):;?>
                        <option value="<?php echo $row['food'];?>"><?php echo $row['food'];?></option>
                    <?php endwhile;
                    mysqli_data_seek($result, 0);
                    ?>
                </select>
                </div>
            <?php endwhile ?>
        <?php endif ?>
        </div>
        <?php if(!isset($_SESSION['fri_num'])):;?>
            <form action="update-lunch-front.php" method="POST">
                Enter number of food items :
                <div class="input-field inline">
                    <input type="number" name="fri_num" max="10" min="0" required>
                    <label for="fri_num">No of Items</label>
                </div>
                <input type="submit" formaction="update-lunch-front.php" class="btn amber lighten-1 white-text" value="Next">
            </form>
        <?php endif ;?>
        <div class="center">
            <button type="submit" name="submit" value="submit" class="btn green waves-effect">Submit</button>
        </div>
	</form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../style/js/materialize.min.js"></script>
<script>
    (function($){
        $(function(){

            $('.sidenav').sidenav();
            $('select').formSelect();
        }); // end of document ready
    })(jQuery); // end of jQuery name space

</script>
</body>
</html>