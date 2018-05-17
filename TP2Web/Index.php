<?php
	include './Model/Database.php';
	include './Model/Procedures.php';
	include './Model/Tests.php';
	include './Model/Users.php';
	include './Controller/ProceduresController.php';
	include './Controller/TestsController.php';
	include './Controller/UsersController.php';

	use Controller\ProceduresController;

	$target = "./View/Homepage.php";
	$proc = new ProceduresController;
	$proc->listAll($target);