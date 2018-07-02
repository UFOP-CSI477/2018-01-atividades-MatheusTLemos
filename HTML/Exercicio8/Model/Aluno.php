<?php
namespace Model;
use Model\Database;
class Aluno {
  protected $db = null;
  
  public function __construct() {
    $this->db = Database::getInstance()->getDB();
  }

  public function all() {
    $sql = "SELECT * FROM alunos ORDER BY nome";
    return $this->db->query($sql);
  }

  public function insert($nome, $rua, $numero, $bairro, $cidade_id, $cep, $mail) {
    $sql = "INSERT into alunos(nome, rua, numero, bairro, cidade_id, cep, mail) VALUES("+$nome+", "+$rua+", "+$numero+", "+$bairro+", "+$cidade_id+", "+$cep+", "+$mail+")";
    return $this->db->query($sql);
  }
}