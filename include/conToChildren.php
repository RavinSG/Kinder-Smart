<?php
session_start();
require_once 'pdo.inc.php';

if (isset($_POST['submit'])){
    $first = $_POST['first'];
    $last = $_POST['last'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];
    $parent = $_POST['parent'];

    if (empty($first) or empty($last) or empty($age) or empty($contact) or empty($parent)){
        header("Location: ../Admin/addChild.php?add=empty&first=$first&last=$last&age=$age&contact=$contact&parent=$parent");
        return;

    } elseif ($age<=0){
        header("Location: ../Admin/addChild.php?add=ageError&first=$first&last=$last&age=$age&contact=$contact&parent=$parent");
        return;

    } elseif ((1 === preg_match('~[0-9]~', $first)) or (1 === preg_match('~[0-9]~', $last))){
        header("Location: ../Admin/addChild.php?add=nameError&first=$first&last=$last&age=$age&contact=$contact&parent=$parent");
        return;

    } elseif (preg_match('~[a-z]~', $contact)){
        header("Location: ../Admin/addChild.php?add=contactError&first=$first&last=$last&age=$age&contact=$contact&parent=$parent");
        return;

    }
    else{
        $sql = "INSERT INTO children (child_fname, child_lname, age, contact_num, parent) 
VALUES (:fname, :lname, :age, :contact, :parent)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':fname' => $first,
            ':lname' => $last,
            ':age' => $age,
            ':contact' => $contact,
            ':parent' => $parent));
        header("Location: ../Admin/addChild.php?add=successful");
        return;
    }

} else{
    header('Location: ../Admin/addChild.php?add=error');
}