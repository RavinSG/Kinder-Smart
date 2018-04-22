<?php
session_start();
require_once 'pdo.inc.php';

if (isset($_POST['submit'])){
    $first = $_POST['first'];
    $last = $_POST['last'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $leave = $_POST['leave'];
    if (empty($first) or empty($last) or empty($phone) or empty($email) or empty($leave)){
        header("Location: ../addTeacher.php?add=empty&first=$first&last=$last&phone=$phone&email=$email&leave=$leave");
        return;
    } elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        header("Location: ../addTeacher.php?add=invalidemail&first=$first&last=$last&phone=$phone&email=$email&leave=$leave");
        return;
    } else{
        $sql = "INSERT INTO teachers (teacher_fname, teacher_lname, teacher_phone, teacher_email, leave_avail) 
VALUES (:fname, :lname, :phone, :email, :leave)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':fname' => $first,
            ':lname' => $last,
            ':phone' => $phone,
            ':email' => $email,
            ':leave' => $leave));
        header("Location: ../addTeacher.php?add=successful");
        return;
    }

} else{
    header('Location: ../addTeacher.php?add=error');
}