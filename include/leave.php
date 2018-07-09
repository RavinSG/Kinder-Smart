<?php
include "../classes/KinderTeacher.php";
session_start();
require_once ("../Teacher/checklogin.teacher.php");
require_once 'pdo.inc.php';
$id = $_SESSION['teacher']->getID();
$leave_date = $_POST['date'];
$leave_duration = $_POST['duration'];
$note = $_POST['note'];

if (isset($_POST['nopay'])){
    $nopay = $_POST['nopay'];
} else {
    $nopay = false;
}

if (empty($leave_date) or empty($leave_duration) or empty($note)){
    header("Location: ../Teacher/applyLeave.php?msg=empty&date=$leave_date&duration=$leave_duration&note=$note");
    return;

} elseif($leave_duration < 1){
    header("Location: ../Teacher/applyLeave.php?msg=duration&date=$leave_date&duration=$leave_duration&note=$note");
    return;

} elseif($leave_duration > 40){
    header("Location: ../Teacher/applyLeave.php?msg=fired&date=$leave_date&duration=$leave_duration&note=$note");
    return;

}  elseif(strtotime($leave_date)<strtotime(date('y-m-d'))){
    header("Location: ../Teacher/applyLeave.php?msg=date&date=$leave_date&duration=$leave_duration&note=$note");
    return;

} else {
    $chkleave = "SELECT * FROM teacher_db WHERE id=:id";
    $stmtchk = $pdo->prepare($chkleave);
    $stmtchk->execute(array('id' => $id));
    $row = $stmtchk->fetch(PDO::FETCH_ASSOC);
    $leave_left = $row['leave_avail'];

    if (isset($leave_left)){

        if (($leave_left < $leave_duration) && !($nopay)){
            header("Location: ../Teacher/applyLeave.php?msg=insufficient&date=$leave_date&duration=$leave_duration&note=$note");
            return;

        } else {
            $sql = "INSERT INTO leaveforms (id, leave_date, leave_duration, no_pay, note, state)
VALUES (:id, :leave_date, :leave_duration, :nopay, :note, :state)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
                'id' => $id,
                'leave_date' => $leave_date,
                'leave_duration' => $leave_duration,
                'nopay' => $nopay,
                'note' => $note,
                'state' => "Pending"
            ));
            header("Location: ../Teacher/applyLeave.php?msg=registered");
            return;
        }
    } else {
        header("Location: ../Teacher/applyLeave.php?msg=unavailable&date=$leave_date&duration=$leave_duration&note=$note");
        return;
    }

}

