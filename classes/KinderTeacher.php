<?php

require_once '../include/pdo.inc.php';

class KinderTeacher
{

    private $id;
    private $name;
    private $telNo;
    private $email;
    private $leave_avail;

    function __construct($id)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM teacher_db WHERE id=:id");
        $stmt->execute(array(
            'id'=>$id
        ));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->id = $id;
        $this->name = $row['full_name'];
        $this->email = $row['email'];
        $this->telNo = $row['tele_no'];
        $this->leave_avail = $row['leave_avail'];
        $this->mobileNo = $row['mobile_no'];

    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLeaveAvail()
    {
        return $this->leave_avail;
    }

    public function getMobileNo()
    {
        return $this->mobileNo;
    }
}