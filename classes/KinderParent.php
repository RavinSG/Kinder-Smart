<?php
require_once '../include/pdo.inc.php';

class KinderParent{
    private $id;
    private $name;
    private $nicNo;
    private $email;
    private $address;
    private $telNo;
    private $mobileNo;
    private $children = array();

    function __construct($id)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM parent_db WHERE id=:id");
        $stmt->execute(array(
            'id'=>$id
        ));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->id = $id;
        $this->name = $row['full_name'];
        $this->nicNo = $row['nic'];
        $this->email = $row['email'];
        $this->telNo = $row['tele_no'];
        $this->address = $row['address'];
        $this->mobileNo = $row['mobile_no'];
        array_push($this->children,$row['children']);

    }

    public function getChildren()
    {
        return $this->children;
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

    public function getNicNo()
    {
        return $this->nicNo;
    }

    public function getTelNo()
    {
        return $this->telNo;
    }
}

