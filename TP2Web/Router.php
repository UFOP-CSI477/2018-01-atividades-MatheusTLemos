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
if ($op == 0) {
    session_destroy();
    header("Location: /TP2Web/Index.php");
} else if ($op == 1) {
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
} else if ($op == 5) {
    $date = $_POST["date"];
    $procedure = $_POST["procedure"];
    $testsController = new TestsController;
    $testsController->insertTest($date, $procedure);
} else if ($op == 6) {
    $proceduresController = new ProceduresController;
    $name = $_POST["name"];
    $price = $_POST["price"];
    $proceduresController->insertProcedure($name, $price);
} else if ($op == 7) {
    $target = "../TP2Web/View/AdminViewProcedures.php";
    $proceduresController = new ProceduresController;
    $proceduresController->listAll($target);
} else if ($op == 8) {
    $proceduresController = new ProceduresController;
    $id = $_POST["id"];
    $proceduresController->removeProcedure($id);
} else if ($op == 9) {
    $proceduresController = new ProceduresController;
    $id = $_POST["id"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $proceduresController->modifyProcedure($id, $name, $price);
} else if ($op == 10) {
    $target = "../TP2Web/View/OperatorViewProcedures.php";
    $proceduresController = new ProceduresController;
    $proceduresController->listAll($target);
} else if ($op == 11) {
    $proceduresController = new ProceduresController;
    $id = $_POST["id"];
    $price = $_POST["price"];
    $proceduresController->operatorModifyProcedure($id, $price);
} else if ($op == 12) {
    $id = $_POST["id"];
    $testsController = new TestsController;
    $testsController->removeTest($id);
} else if ($op == 13) {
    $id = $_POST["id"];
    $date = $_POST["date"];
    $procedureId = $_POST["procedure"];
    $testsController = new TestsController;
    $testsController->updateTest($id, $date, $procedureId);
} else if ($op == 14) {
    $usersController = new UsersController;
    $usersController->adminViewUsers();
} else if ($op == 15) {
    $testsController = new TestsController;
    $testsController->adminViewTests();
} else if ($op == 16) {
    $usersController = new UsersController;
    $id = $_POST['id'];
    $usersController->removeUser($id);
} else if ($op == 17) {
    $usersController = new UsersController;
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type = $_POST['type'];
    $usersController->modifyUser($id, $name, $email, $password, $type);
} else if ($op == 18) {
    $usersController = new UsersController;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type = $_POST['type'];
    $usersController->adminCreateUser($name, $email, $password, $type);
} else if ($op == 19) {
    $testsController=new TestsController;
    $id=$_POST['id'];
    $testsController->adminRemoveTest($id);
} else if ($op == 20) {
    $testsController=new TestsController;
    $id=$_POST['userId'];
    $testsController->adminFilterTestsUser($id);
} else if ($op == 21) {
    $testsController=new TestsController;
    $id=$_POST['procedureId'];
    $testsController->adminFilterTestsProcedures($id);
}