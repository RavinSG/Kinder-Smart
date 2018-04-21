<!DOCTYPE html>
<html>
<head>
    <title>Apply Leave</title>
    <link rel="stylesheet" href="include/style.css">
</head>
<body>

<h2>Leave Form</h2>
<form action="include/leave.php" method="post" id="target">
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
    <input type="submit" name="submit" value="Submit">

</form>

<?php

if (isset($_GET['msg'])){
    $msg = $_GET['msg'];

    if ($msg == 'insufficient'){
        echo "<p class='error'>You don't have enough leaves left!</p>";

    } elseif ($msg='registered'){
        echo "<p class='success'>Your leave form has been registered!</p>";
    }
}
?>
</body>
</html>

