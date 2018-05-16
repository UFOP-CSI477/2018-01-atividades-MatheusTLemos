<?php
namespace Model;
use Model\Database;
class Users{
  protected $db = null;

  public function __construct() {
    $this->db = Database::getInstance()->getDB();
  }
}