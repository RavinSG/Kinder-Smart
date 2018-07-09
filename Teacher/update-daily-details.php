<?php
session_start();
require_once ("checklogin.teacher.php");
require_once("../include/connection.inc.php");
?>

<?php
if(isset($_POST['homework']) && isset($_POST['spec_note'])){
    $hw = mysqli_real_escape_string($connection,$_POST['homework']);
    $spec_note = mysqli_real_escape_string($connection,$_POST['spec_note']);

    if(empty($hw) && empty($spec_note)){
        $_SESSION["daily_details"] = 'empty';
    }
    else{
        $date = new DateTime("today");
        $day = strtolower($date->format("l"));
        if ($day == 'saturday' || $day == 'sunday'){
            $_SESSION["daily_details"] = 'holiday';
        }
        else{
            $date = $date->format("Y-m-d");

            $query = "SELECT * FROM daily_notes where date='{$date}'";
            $result = mysqli_query($connection,$query);
            if (mysqli_num_rows($result)){
                $_SESSION['daily_details'] = 'exist';
                $query = "UPDATE daily_notes SET homework = '{$hw}', spec_note = '{$spec_note}' WHERE date='{$date}'";
            }
            else {
                $query = "INSERT INTO daily_notes (date,spec_note,homework) VALUES ('{$date}','{$spec_note}','{$hw}')";
                $_SESSION["daily_details"] = 'successful';
            }
            $result = mysqli_query($connection, $query);
        }

    }
}
else{
    $_SERVER['daily_details'] = 'server';
}
header("Location: update-daily-details-front.php");
?>