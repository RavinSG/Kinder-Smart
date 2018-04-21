<?php
$a = 1;
require_once 'pdo.inc.php';
$id = $_POST['id'];
$leave_date = $_POST['date'];
$leave_duration = $_POST['duration'];
$note = $_POST['note'];

if (isset($_POST['nopay'])){
    $nopay = $_POST['nopay'];
} else {
    $nopay = false;
}

if (empty($id) or empty($leave_date) or empty($leave_duration) or empty($note)){
    header("Location: ../applyLeave.php?msg=empty&");
} else {
    $chkleave = "SELECT * FROM teachers WHERE id=:id";
    $stmtchk = $pdo->prepare($chkleave);
    $stmtchk->execute(array('id' => $id));
    $row = $stmtchk->fetch(PDO::FETCH_ASSOC);
    $leave_left = $row['leave_avail'];

    if ($leave_left < $leave_duration){
        header("Location: ../applyLeave.php?msg=insufficient");
        return;

    } else {
        $sql = "INSERT INTO leaveforms VALUES (:id, :leave_date, :leave_duration, :nopay, :note)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            'id' => $id,
            'leave_date' => $leave_date,
            'leave_duration' => $leave_duration,
            'nopay' => $nopay,
            'note' => $note
        ));
        header("Location: ../applyLeave.php?msg=registered");
    }
}

