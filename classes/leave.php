<?php
require_once 'include/pdo.inc.php';
class Leave{

    private $forms = array();
    function __construct()
    {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM leaveforms");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            array_push($this->forms,$row);
        }
    }

    public function getForms(){
        return $this->forms;
    }
}

$leave = new Leave();