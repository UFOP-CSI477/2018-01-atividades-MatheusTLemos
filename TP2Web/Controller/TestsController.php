<?php

namespace Controller;

use Model\Tests;
use Model\Procedures;

class TestsController {

    function showUserTests() {
        $tests = new Tests;
        $results = $tests->showUserTests();
        $totalCount = $tests->countUserTests();
        $proc = new Procedures(TRUE);
        $list = $proc->listAll();
        include '../TP2Web/View/UserTests.php';
    }

    function insertTest($date, $procedure) {
        $tests = new Tests;
        $result = $tests->insertTest($date, $procedure);
        include '../TP2Web/View/UserArea.php';
    }

    function removeTest($id) {
        $tests = new Tests;
        $tests->RemoveTest($id);
        header("Location: /TP2Web/Router.php?op=3");
    }

    function updateTest($id, $date, $procedureId) {
        $tests = new Tests;
        $results = $tests->updateTest($id, $date, $procedureId);
        header("Location: /TP2Web/Router.php?op=3");
    }

    function adminViewTests() {
        $tests = new Tests;
        $results = $tests->viewAllTests();
        include '../TP2Web/view/AdminTests.php';
    }

    function adminRemoveTest($id) {
        $tests = new Tests;
        $tests->RemoveTest($id);
        header("Location: /TP2Web/Router.php?op=15");
    }
    
    function adminFilterTestsUser($id) {
        $tests = new Tests;
        $results = $tests->viewUserTests($id);
        include '../TP2Web/view/AdminTests.php';
    }
    
    function adminFilterTestsProcedures($id) {
        $tests = new Tests;
        $results = $tests->viewProcedureTests($id);
        include '../TP2Web/view/AdminTests.php';
    }
}
