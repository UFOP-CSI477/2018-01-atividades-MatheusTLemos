<?php
namespace Model;
use Model\Database;
class Tests{
  protected $db = null;

  public function __construct() {
    $this->db = Database::getInstance()->getDB();
  }
}