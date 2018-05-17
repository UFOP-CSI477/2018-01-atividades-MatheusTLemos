<?php
namespace Controller;
use Model\Users;
class UsersController {
	function validateUser($email, $password){
		$users = new Users;
		$op = $users->validateUser($email, $password);
		if($op === null){
			include './View/Login.php';
		}else{
			include './View/UserArea.php';
		}
	}
}