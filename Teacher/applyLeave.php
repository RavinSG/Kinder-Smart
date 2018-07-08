<?php
session_start();
require_once ("checklogin.teacher.php")?>
<!DOCTYPE html>
<html>
<head>
    <title>Apply Leave</title>
    <meta charset="UTF-8">
    <title>Welcome to KinderSmart</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../style/css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<?php require("navbar.teacher.html");?>
<h2 class="center">Leave Form</h2>
<div class="container" style="width: 40%">
    <form action="../include/leave.php" method="post" id="target">
        <?php
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            echo '<input type="text" name="id" placeholder="Teacher ID"  value="'.$id.'">';
        }
        else{
            echo '<input type="text" name="id" placeholder="Teacher ID">';
        }
        if (isset($_GET['nopay'])){
            $nopay = $_GET['nopay'];
            echo '<input type="checkbox" class="box" name="nopay" value=$nopay>';
        }
        else {
            echo '<input type="checkbox" class="box" name="nopay" >';
        }
        if(isset($_GET['date'])){
            $date = $_GET['date'];
            echo '<input type="date" name="date" placeholder="Date" value="'.$date.'">';
        }
        else{
            echo '<input type="date" name="date" placeholder="Date">';

        }
        if(isset($_GET['duration'])){
            $duration = $_GET['duration'];
            echo '<input type="number" name="duration" placeholder="Duration" value="'.$duration.'">';
        }
        else{
            echo '<input type="number" name="duration" placeholder="Duration">';
        }

        if(isset($_GET['note'])){
            $note = $_GET['note'];
            echo '<input type="text" class="note" name="note" placeholder="Note" value="'.$note.'">';
        }
        else{
            echo '<input type="text" class="note" name="note" placeholder="Note">';
        }

        ?>
        <button type="submit" name="submit" value="Submit" class="btn green center-block">Submit</button>

    </form>

    <?php

    if (isset($_GET['msg'])){
        $msg = $_GET['msg'];

        if ($msg == 'insufficient'){
            echo "<p class='error'>You don't have enough leaves left!<br>Would you like to apply for no pay leave?</p>";

        } elseif ($msg == 'empty'){
            echo "<p class='error'>Please fill in all the details!</p>";

        } elseif ($msg == 'date'){
            echo "<p class='error'>Please enter a valid date!</p>";

        } elseif ($msg == 'unavailable'){
            echo "<p class='error'>Please enter a valid ID!</p>";

        } elseif ($msg == 'duration'){
            echo "<p class='error'>Please enter a valid leave duration!</p>";

        }  elseif ($msg =='registered'){
            echo "<p class='success'>Your leave form has been registered!</p>";

        }
    }
    ?>
</div>
<script type="text/javascript" src="../style/js/materialize.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
    (function($){
        $(function(){
            $('.sidenav').sidenav();
        }); // end of document ready
    })(jQuery); // end of jQuery name space

</script>
</body>
</html>

