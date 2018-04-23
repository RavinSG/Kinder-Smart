<?php
require_once 'include/pdo.inc.php';

class Syllabus{

    private $content = array();
    function __construct()
    {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM syllabus");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            array_push($this->content,$row);
        }
    }

    public function getContent(){
        return $this->content;
    }

}

$syllabus = new Syllabus();