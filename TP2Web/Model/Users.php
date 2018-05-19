<?php

namespace Model;

use Model\Database;

class Users {

    protected $db = null;

    public function __construct() {

        $this->db = Database::getInstance()->getDB();
    }

    public function validateUser($email, $password) {
        $query = $this->db->prepare("SELECT * FROM `users` WHERE users.email='" . $email . "'AND users.password='" . $password . "'");
        $results = $query->execute();
        $numRows = $query->rowCount();
        if ($numRows == 0) {
            return null;
        } else {
            $results=$query->fetch();
            return $results;
        }
    }

    public function addNewUser($name, $email, $password) {
        $query = $this->db->prepare("INSERT INTO users(name, email, password, type, created_at) VALUES ('" . $name . "', '" . $email . "', '" . $password . "', 3, CURRENT_TIMESTAMP)");
        $result = $query->execute();
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

}
