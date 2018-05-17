<?php

include_once '../TP2Web/Model/Database.php';
include_once '../TP2Web/Model/Procedures.php';
include_once '../TP2Web/Model/Tests.php';
include_once '../TP2Web/Model/Users.php';
include_once '../TP2Web/Controller/ProceduresController.php';
include_once '../TP2Web/Controller/TestsController.php';
include_once '../TP2Web/Controller/UsersController.php';

use Controller\UsersController;
use Controller\TestsController;
use Controller\ProceduresController;

$op = $_GET['op'];

if ($op == 1) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $userController = new UsersController;
    $userController->validateUser($email, $password);
} else if ($op == 2) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $userController = new UsersController;
    $userController->addNewUser($name, $email, $password);
} else if ($op == 3) {
    $testsController = new TestsController;
    $testsController->showUserTests();
} else if ($op == 4) {
    $proceduresController = new ProceduresController;
    $targetView = "../TP2Web/View/UserScheduleTests.php";
    $proceduresController->listAll($targetView);
}else if($op==5){
    $date = $_POST["date"];
    $procedure = $_POST["procedure"];
    $testsController = new TestsController;
    $testsController->insertTest($date, $procedure);
}else if($op==6){
    session_start();
    $userType= $_SESSION['type'];
    if($userType==1){
        $proceduresController=new ProceduresController;
        $name=$_POST["name"];
        $price=$_POST["price"];
        $proceduresController->insertProcedure($name, $price);
    }else{
        echo "Permissão Negada";
        session_destroy();
        header("../Index.php");
    }
}else if($op==7){
    $target = "../TP2Web/View/AdminViewProcedures.php";
    $proc = new ProceduresController;
    $proc->listAll($target);
}