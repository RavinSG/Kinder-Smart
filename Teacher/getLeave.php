<?php
require_once "../include/pdo.inc.php";

$sql = "SELECT * from leaveforms WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(array(
    ':id' => $id
));

$applied = array();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    array_push($applied,$row);
}

