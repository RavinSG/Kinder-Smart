<?php
include "../include/pdo.inc.php";
include "../classes/KinderParent.php";
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

if (!isset($_POST['submit'])){
    header("Location: login.html");

}elseif (empty($email) or empty($password)){
    header("Location: login.html?error=empty");

}else{
    //$password = sha1($password);
    $sql = "SELECT * FROM parent_login WHERE email= :email and password= :pass";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        'email'=>$email,
        'pass'=>$password
    ));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (empty($row)){
        header("Location: login.html?error=invalid");

    }else {
        $parent = new KinderParent($row['id']);
        $_SESSION['parent'] = $parent;
        header("Location: ../Parent/index.php");
    }


}