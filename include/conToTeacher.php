<?php
session_start();
require_once 'pdo.inc.php';

if (isset($_POST['submit'])){
    $first = $_POST['first'];
    $last = $_POST['last'];
    $nic = $_POST['nic'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $leave = $_POST['leave'];
    if (empty($first) or empty($last) or empty($phone) or empty($email) or empty($leave)){
        header("Location: ../Admin/registration/addTeacher.php?add=empty&first=$first&last=$last&phone=$phone&email=$email&leave=$leave&nic=$nic");
        return;
    } elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        header("Location: ../Admin/registration/addTeacher.php?add=invalidemail&first=$first&last=$last&phone=$phone&email=$email&leave=$leave&nic=$nic");
        return;
    } else{
        $sql = "INSERT INTO teacher_db (teacher_fname, teacher_lname,nic, teacher_phone, teacher_email, leave_avail) 
VALUES (:fname, :lname,:nic, :phone, :email, :leave)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':fname' => $first,
            ':lname' => $last,
            ':nic' => $nic,
            ':phone' => $phone,
            ':email' => $email,
            ':leave' => $leave));

        require("connection.inc.php");
        $query = "SELECT id FROM teacher_db WHERE teacher_email='{$email}'";
        $result = mysqli_query($connection,$query);
        $row = mysqli_fetch_array($result);
        $uid = $row[0];

        $password = sha1($nic);
        $type = 'teacher';
        $sql = "INSERT INTO super_table (email, password,uid,acc_type) 
        VALUES (:email, :password, :uid, :type)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':email' => $email,
            ':password' => $password,
            ':uid' => $uid,
            ':type' => $type));
        header("Location: ../Admin/registration/addTeacher.php?add=successful");
        return;
    }

} else{
    header('Location: ../Admin/registration/addTeacher.php?add=error');
}