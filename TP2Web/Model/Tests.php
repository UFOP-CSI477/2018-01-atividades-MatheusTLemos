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
        $query= $this->db->prepare("SELECT tests.id as id, procedures.name as name, tests.date as date, procedures.price as price FROM `tests`, `procedures` WHERE tests.user_id=".$userId." AND tests.procedure_id=procedures.id ORDER BY tests.date, procedures.name");
        $query->execute();
        $results=$query->fetchAll();
        return $results;
    }
    
    public function countUserTests() {
        $userData = $_SESSION['userData'];
        $userId = $userData['id'];
        $query= $this->db->prepare("SELECT COUNT(tests.id) as amount, SUM(procedures.price) as cost FROM `tests`, `procedures` WHERE tests.user_id=".$userId." AND tests.procedure_id=procedures.id");
        $query->execute();
        $results=$query->fetch();
        return $results;
    }

    public function insertTest($date, $procedure){
        $userData = $_SESSION['userData'];
        $userId = $userData['id'];
        $query=$this->db->prepare("INSERT into tests(user_id, procedure_id, date, created_at) VALUES(".$userId.", ".$procedure.", '".$date."', CURRENT_TIMESTAMP)");
        $result=$query->execute();
        return $result;
    }
    
    public function removeTest($id){
        $userData = $_SESSION['userData'];
        $userId = $userData['id'];
        $query=$this->db->prepare("DELETE FROM tests WHERE id=" . $id ." AND user_id=".$userId);
        $result=$query->execute();
        return $result;
    }
    
    public function updateTest($id, $date, $procedureId){
        $userData = $_SESSION['userData'];
        $userId = $userData['id'];
        if(($date=="" || $date==null) && $procedureId == ""){
            return;
        }else if($date=="" || $date==null || $date=="Data"){
            $query=$this->db->prepare("UPDATE tests SET procedure_id = " . $procedureId . ", updated_at = CURRENT_TIMESTAMP WHERE id=" . $id ." AND user_id=".$userId);
            $result=$query->execute();
            return;
        } else if($procedureId==""){
            $query=$this->db->prepare("UPDATE tests SET date = '" . $date . "', updated_at = CURRENT_TIMESTAMP WHERE id=" . $id ."AND user_id=".$userId);
            $result=$query->execute();
            return;
        } else{
            $query=$this->db->prepare("UPDATE tests SET procedure_id = " . $procedureId . ", date = '" . $date . "', updated_at = CURRENT_TIMESTAMP WHERE id=" . $id ."AND user_id=".$userId);
            $result=$query->execute();
            return;
        }
    }
}
