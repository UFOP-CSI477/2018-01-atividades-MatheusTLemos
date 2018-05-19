<?php

namespace Controller;

use Model\Users;

class UsersController {

    function validateUser($email, $password) {
        $users = new Users;
        $op = $users->validateUser($email, $password);
        if ($op === null || !$op) {
            include '../TP2Web/View/Login.php';
        } else {
            $_SESSION['userData'] = $op;
            if ($op['type'] == 1) {
                include '../TP2Web/View/AdminArea.php';
            } else if ($op['type'] == 2) {
                include '../TP2Web/View/OperatorArea.php';
            } else if ($op['type'] == 3) {
                include '../TP2Web/View/UserArea.php';
            }
        }
    }

    function addNewUser($name, $email, $password) {
        $users = new Users;
        $op = $users->addNewUser($name, $email, $password);
        if ($op == false) {
            include '../TP2Web/View/Register.php';
        } else {
            include '../TP2Web/Index.php';
        }
    }

    function adminViewUsers() {
        $users = new Users;
        $list = $users->viewAllUsers();
        if (!$list) {
            header("Location: /TP2Web/Index.php");
        }
        include '../TP2Web/View/AdminViewUsers.php';
    }
    
    function removeUser($id) {
        $users = new Users;
        $users->removeUser($id);
        header("Location: /TP2Web/Router.php?op=14");
    }
    
    function modifyUser($id, $name, $email, $password, $type){
        $users = new Users;
        $users->modifyUser($id, $name, $email,$password,$type);
        header("Location: /TP2Web/Router.php?op=14");
    }
    
    function adminCreateUser($name, $email, $password, $type){
        $users = new Users;
        $users->adminCreateUser($name, $email, $password, $type);
        header("Location: /TP2Web/Router.php?op=14");
    }
}
