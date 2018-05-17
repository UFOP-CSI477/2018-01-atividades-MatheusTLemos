<?php

namespace Controller;

use Model\Users;

class UsersController {

    function validateUser($email, $password) {
        $users = new Users;
        $op = $users->validateUser($email, $password);
        if ($op === null || !$op) {
            include './View/Login.php';
        } else {
            if($op['type']==1){
                include './View/AdminArea.php';
            }else if($op['type']==2){
                include './View/OperatorArea.php';
            }else if($op['type']==3){
                include './View/UserArea.php';
            }
        }
    }

    function addNewUser($name, $email, $password) {
        $users = new Users;
        $op = $users->addNewUser($name, $email, $password);
        if ($op == false) {
            include './View/Register.php';
        } else {
            include './Index.php';
        }
    }

}
