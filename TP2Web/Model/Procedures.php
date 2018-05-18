<?php

namespace Model;

use Model\Database;

class Procedures {

    protected $db = null;

    public function __construct() {
        session_start();
        $this->db = Database::getInstance()->getDB();
    }

    public function listAll() {
        $sql = "SELECT * FROM procedures ORDER BY name";
        return $this->db->query($sql);
    }

    public function insertProcedure($name, $price) {
        $userData = $_SESSION['userData'];
        $userId = $userData['id'];
        $userType = $userData['type'];
        if ($userType != 1) {
            return false;
        }
        $query = $this->db->prepare("INSERT into procedures(name, price, user_id) VALUES('" . $name . "', " . $price . ", " . $userId . ")");
        $result = $query->execute();
        return $result;
    }

    public function removeProcedure($id) {
        $userData = $_SESSION['userData'];
        $userType = $userData['type'];
        if ($userType != 1) {
            return false;
        }
        $query = $this->db->prepare("DELETE FROM procedures WHERE id=" . $id);
        $result = $query->execute();
        return $result;
    }

    public function modifyProcedure($id, $name, $price) {
        $userData = $_SESSION['userData'];
        $userId = $userData['id'];
        $userType = $userData['type'];
        if ($userType != 1) {
            return false;
        }
        if (($name == "Nome" || $name == "" || $name == null) && ($price == "Preço" || $price == "" || $price == null)) {
            return false;
        } else if ($name != "Nome" && $name != "" && $name != null && ($price == "Preço" || $price == "" || $price == null)) {
            $query = $this->db->prepare("UPDATE procedures SET name = '" . $name . "', user_id = " . $userId . " WHERE id=" . $id);
            $query->execute();
        } else if ($price != "Preço" && $price != "" && $price != null && ($name == "Nome" || $name == "" || $name == null)) {
            $query = $this->db->prepare("UPDATE procedures SET price = " . $price . ", user_id = " . $userId . " WHERE id=" . $id);
            $query->execute();
        } else {
            $query = $this->db->prepare("UPDATE procedures SET name = '" . $name . "', price=" . $price . ", user_id = " . $userId . " WHERE id=" . $id);
            $query->execute();
        }
        return true;
    }

    function operatorModifyProcedure($id, $price) {
        $userData = $_SESSION['userData'];
        $userId = $userData['id'];
        $userType = $userData['type'];
        if ($userType != 2) {
            return false;
        }
        if ($price == "Preço" || $price == "" || $price == null) {
            return false;
        } else {
            $query = $this->db->prepare("UPDATE procedures SET price = " . $price . ", user_id = " . $userId . " WHERE id=" . $id);
            $query->execute();
        }
        return true;
    }

}
