<?php

namespace Model;

use Model\Database;

class Users {

    protected $db = null;

    public function __construct() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $this->db = Database::getInstance()->getDB();
    }

    public function viewAllUsers() {
        $userData = $_SESSION['userData'];
        $userType = $userData['type'];
        if ($userType != 1) {
            return false;
        }
        $query = $this->db->prepare("SELECT * FROM `users`");
        $query->execute();
        $results = $query->fetchAll();
        return $results;
    }

    public function validateUser($email, $password) {
        $query = $this->db->prepare("SELECT * FROM `users` WHERE users.email='" . $email . "'AND users.password='" . $password . "'");
        $results = $query->execute();
        $numRows = $query->rowCount();
        if ($numRows == 0) {
            return null;
        } else {
            $results = $query->fetch();
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

    public function removeUser($id) {
        $userData = $_SESSION['userData'];
        $userType = $userData['type'];
        if ($userType != 1) {
            return false;
        }
        $query = $this->db->prepare("DELETE FROM `users` WHERE id=" . $id);
        $query->execute();
    }

    public function modifyUser($id, $name, $email, $password, $type) {
        $userData = $_SESSION['userData'];
        $userType = $userData['type'];
        $userId = $userData['id'];
        if ($userType != 1) {
            return false;
        }
        if ($name != "" && $name != null && $name != "Nome") {
            $query = $this->db->prepare("UPDATE users SET name = '" . $name . "' WHERE id=" . $id);
            $query->execute();
        }
        if ($email != "" && $email != null && $email != "E-mail") {
            $query = $this->db->prepare("UPDATE users SET email = '" . $email . "' WHERE id=" . $id);
            $query->execute();
        }
        if ($password != "" && $password != null && $password != "Nome") {
            $query = $this->db->prepare("UPDATE users SET password = '" . $password . "' WHERE id=" . $id);
            $query->execute();
        }
        if ($type != "" && $type != null) {
            $query = $this->db->prepare("UPDATE users SET type = " . $type . ", updated_at = CURRENT_TIMESTAMP WHERE id=" . $id);
            $query->execute();
        }
        return true;
    }
    
    public function adminCreateUser($name, $email, $password, $type){
        $userData = $_SESSION['userData'];
        $userType = $userData['type'];
        $userId = $userData['id'];
        if ($userType != 1) {
            return false;
        }
        $query = $this->db->prepare("INSERT INTO users(name, email, password, type, created_at) VALUES ('" . $name . "', '" . $email . "', '" . $password . "', ".$type.", CURRENT_TIMESTAMP)");
        $result = $query->execute();
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

}
