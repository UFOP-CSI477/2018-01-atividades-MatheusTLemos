<?php
namespace Model;
use Model\Database;
class Procedures{
  protected $db = null;

  public function __construct() {
    $this->db = Database::getInstance()->getDB();
  }

  public function listAll() {
    $sql = "SELECT * FROM procedures ORDER BY name";
    return $this->db->query($sql);
  }

  public function insertProcedure($name, $price) {
  	session_start();
  	$userId = $_SESSION['id'];
    $userType= $_SESSION['type'];
    if($userType!=1){
      return false;
    }
  	$query = $this->db->prepare("INSERT into procedures(name, price, user_id) VAUES(".$userId.", '".$name."', '".$price."')");
  	$result=$query->execute();
  	return $result
  }

  public function removeProcedure($id){
    session_start();
    $userType= $_SESSION['type'];
    if($userType!=1){
      return false;
    }
    $query = $this->db->prepare("DELETE FROM procedures WHERE id=".$id);
    $result=$query->execute();
    return $result
  }
}