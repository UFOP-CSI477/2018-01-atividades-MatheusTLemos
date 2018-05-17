<?php
	include './Model/Database.php';
	include './Model/Procedures.php';
	include './Model/Tests.php';
	include './Model/Users.php';
	include './Controller/ProceduresController.php';
	include './Controller/TestsController.php';
	include './Controller/UsersController.php';

	use Controller\UsersController;

	$op = $_GET['op'];

	if($op==1){
		$email = $_POST["email"];
		$password = $_POST["password"];
		$userController = new UsersController;
		$userController->validateUser($email, $password);
	}