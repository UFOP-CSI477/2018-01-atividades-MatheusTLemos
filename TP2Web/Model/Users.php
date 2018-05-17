<?php
namespace Model;
use Model\Database;
class Users{
  protected $db = null;

  public function __construct() {
    $this->db = Database::getInstance()->getDB();
  }

  public function validateUser($email, $password){
  	$query= $this->db->prepare("SELECT * FROM `users` WHERE users.email='".$email."'AND users.password='".$password."'");
  	$results=$query->execute();
  	$numRows = $query->rowCount();
  	if($numRows==0){
  		return null;
  	}else{
  		return $results;
  	}
  }
}