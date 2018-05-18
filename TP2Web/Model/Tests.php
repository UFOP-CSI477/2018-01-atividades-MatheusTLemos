<?php 

namespace Model;

use Model\Database;

class Tests {

    protected $db = null;

    public function __construct() {
        session_start();
        $this->db = Database::getInstance()->getDB();
    }

    public function showUserTests() {
        $userData = $_SESSION['userData'];
        $userId = $userData['id'];
        $query= $this->db->prepare("SELECT procedures.name as name, tests.date as date FROM `tests`, `procedures` WHERE tests.user_id=".$userId." AND tests.procedure_id=procedures.id");
        $query->execute();
        $results=$query->fetchAll();
        return $results;
    }

    public function insertTest($date, $procedure){
        $userData = $_SESSION['userData'];
        $userId = $userData['id'];
        $query=$this->db->prepare("INSERT into tests(user_id, procedure_id, date) VALUES(".$userId.", ".$procedure.", '".$date."')");
        $result=$query->execute();
        return $result;
    }
}
