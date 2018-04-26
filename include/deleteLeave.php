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
$state = $_GET['state'];

if ($state == "accept"){
    $sql = "UPDATE leaveforms SET state = 'Accepted' WHERE id = :id ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array('id'=>$id));
} elseif ($state == "decline") {
    $sql = "UPDATE leaveforms SET state = 'Rejected' WHERE id = :id ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array('id'=>$id));
}
header("Location: ../viewLeave.php?id=$id&state=$state");
?>

</body>
</html>
