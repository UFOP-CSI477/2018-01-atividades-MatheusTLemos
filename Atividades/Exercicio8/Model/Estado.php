<?php
namespace Model;
use Model\Database;
class Estado {
  protected $db = null;
  
  public function __construct() {
    $this->db = Database::getInstance()->getDB();
  }
  
  public function all() {
    $sql = "SELECT * FROM estados ORDER BY nome";
    return $this->db->query($sql);
  }

  public function insert($nome, $sigla) {
    $sql = "INSERT into estados(nome, sigla) VALUES("+$nome+", "+$sigla+")";
    return $this->db->query($sql);
  }
}