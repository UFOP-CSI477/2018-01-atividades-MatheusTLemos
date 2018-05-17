<?php
	include_once './Model/Database.php';
	include_once './Model/Procedures.php';
	include_once './Model/Tests.php';
	include_once './Model/Users.php';
	include_once './Controller/ProceduresController.php';
	include_once './Controller/TestsController.php';
	include_once './Controller/UsersController.php';

	use Controller\UsersController;

	$op = $_GET['op'];

	if($op==1){
		$email = $_POST["email"];
		$password = $_POST["password"];
		$userController = new UsersController;
		$userController->validateUser($email, $password);
	}else if($op==2){
		$name = $_POST["name"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$userController = new UsersController;
		$userController->addNewUser($name, $email, $password);
	}