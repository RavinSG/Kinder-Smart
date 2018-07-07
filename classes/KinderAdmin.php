<?php
require_once '../include/pdo.inc.php';

class KinderAdmin
{
    private $id;
    private $fullname;
    private $nicNo;
    private $email;
    private $address;
    private $telNo;
    private $mobileNo;

    function __construct($id)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM admin_db WHERE id=:id");
        $stmt->execute(array(
            'id'=>$id
        ));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->id = $id;
        $this->fullname = $row['full_name'];
        $this->nicNo = $row['nic'];
        $this->email = $row['email'];
        $this->telNo = $row['tele_no'];
        $this->address = $row['address'];
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
        return $this->fullname;
    }

    public function getNicNo()
    {
        return $this->nicNo;
    }

    public function getTelNo()
    {
        return $this->telNo;
    }

}