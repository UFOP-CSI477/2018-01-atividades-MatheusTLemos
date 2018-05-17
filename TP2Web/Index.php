<?php
	include_once '../TP2Web/Model/Database.php';
	include_once '../TP2Web/Model/Procedures.php';
	include_once '../TP2Web/Model/Tests.php';
	include_once '../TP2Web/Model/Users.php';
	include_once '../TP2Web/Controller/ProceduresController.php';
	include_once '../TP2Web/Controller/TestsController.php';
	include_once '../TP2Web/Controller/UsersController.php';

	use Controller\ProceduresController;

	$target = "../TP2Web/View/Homepage.php";
	$proc = new ProceduresController;
	$proc->listAll($target);