<?php
session_start();
require_once 'pdo.inc.php';


if (isset($_GET['name'])){

    $date = date('y-m-d');
    $atten = $_GET['name'];
    echo $date;


    $select = 'SELECT * FROM attendance WHERE date = :day';
    $stmt = $pdo->prepare($select);
    $stmt->execute(array(
        ':day' => $date
    ));
    $result = $stmt->fetchAll();

    if (empty($result)){
        $sql = "INSERT INTO attendance (date) VALUES (:day)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':day' => $date
        ));

        foreach ($atten as $student){
            $sql = "UPDATE attendance SET ".$student." = 1 WHERE date = :day";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
                ':day' => $date
            ));
        }

        header("Location: ../Teacher/markAttendance.php?msg=success");

    } else {
        header("Location: ../Teacher/markAttendance.php?msg=marked");
    }





} else{
    header("Location: ../Teacher/markAttendance.php?msg=empty");
}
