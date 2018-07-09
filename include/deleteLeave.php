<!DOCTYPE html>
<html>
<head>
    <title>Reject Leave</title>
</head>
<body>

<?php
session_start();
require_once 'pdo.inc.php';
$id = $_GET['id'];
$lid = $_GET['lid'];
$state = $_GET['state'];

if ($state == "accept"){
    $sql = "UPDATE leaveforms SET state = 'Accepted' WHERE lid = :lid ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array('lid'=>$lid));
} elseif ($state == "decline") {
    $sql = "UPDATE leaveforms SET state = 'Rejected' WHERE lid = :lid ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array('lid'=>$lid));
}
header("Location: ../Admin/viewLeave.php?id=$id&state=$state");
?>

</body>
</html>
