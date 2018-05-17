<?php
	include_once './Model/Database.php';
	include_once './Model/Procedures.php';
	include_once './Model/Tests.php';
	include_once './Model/Users.php';
	include_once './Controller/ProceduresController.php';
	include_once './Controller/TestsController.php';
	include_once './Controller/UsersController.php';

	use Controller\ProceduresController;

	$target = "./View/Homepage.php";
	$proc = new ProceduresController;
	$proc->listAll($target);