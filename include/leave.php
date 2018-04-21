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
    header("Location: ../applyLeave.php?msg=empty&id=$id&date=$leave_date&duration=$leave_duration&note=$note");
    return;

} else {
    $chkleave = "SELECT * FROM teachers WHERE id=:id";
    $stmtchk = $pdo->prepare($chkleave);
    $stmtchk->execute(array('id' => $id));
    $row = $stmtchk->fetch(PDO::FETCH_ASSOC);
    $leave_left = $row['leave_avail'];

    if (isset($leave_left)){

        if (($leave_left < $leave_duration) && !($nopay)){
            header("Location: ../applyLeave.php?msg=insufficient&id=$id&date=$leave_date&duration=$leave_duration&note=$note");
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
            return;
        }
    } else {
        header("Location: ../applyLeave.php?msg=unavailable&id=$id&date=$leave_date&duration=$leave_duration&note=$note");
        return;
    }

}

