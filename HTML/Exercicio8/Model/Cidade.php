<?php
namespace Model;
use Model\Database;
class Cidade {
  protected $db = null;
  public function __construct() {
    $this->db = Database::getInstance()->getDB();
    $this->id = 0;
  }

  public function all() {
    $sql = "SELECT cidades.*, estados.sigla FROM cidades INNER JOIN estados on cidades.estado_id = estados.id ORDER BY id DESC";
    return $this->db->query($sql);
  }

  public function insert($nome, $estado_id) {
    $sql = "INSERT into cidades(nome, estado_id) VALUES("+$nome+", "+$estado_id+")";
    return $this->db->query($sql);
  }
}