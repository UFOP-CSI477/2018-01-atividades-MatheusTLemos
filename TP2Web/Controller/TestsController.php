<?php
namespace Controller;
use Model\Tests;
class TestsController {
    function showUserTests(){
        $tests=new Tests;
        $results=$tests->showUserTests();
        include '../TP2Web/View/UserTests.php';
    }
    
    function insertTest($date, $procedure){
        $tests=new Tests;
        $result=$tests->insertTest($date, $procedure);
        if($result){
            include '../TP2Web/View/UserArea.php';
        }else{
            include '../TP2Web/View/UserArea.php';
        }
    }
}