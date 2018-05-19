<?php

namespace Controller;

use Model\Procedures;

class ProceduresController {
    
    function listAll($targetView) {
        $proc = new Procedures(FALSE);
        $list = $proc->listAll();
        include $targetView;
    }

    function insertProcedure($name, $price) {
        $proc = new Procedures(FALSE);
        $result = $proc->insertProcedure($name, $price);
        if ($result) {
            include "../TP2Web/View/AdminArea.php";
        } else {
            include "../TP2Web/View/CreateProcedure.php";
        }
    }

    function removeProcedure($id) {
        $proc = new Procedures(FALSE);
        $result = $proc->removeProcedure($id);
        if ($result) {
            header("Location: /TP2Web/Router.php?op=7");
        } else {
            header("Location: /TP2Web/Router.php?op=7");
        }
    }

    function modifyProcedure($id, $name, $price) {
        $proc = new Procedures(FALSE);
        $result = $proc->modifyProcedure($id, $name, $price);
        if ($result) {
            header("Location: /TP2Web/Router.php?op=7");
        } else {
            header("Location: /TP2Web/Router.php?op=7");
        }
    }

    function operatorModifyProcedure($id, $price) {
        $proc = new Procedures(FALSE);
        $result = $proc->operatorModifyProcedure($id, $price);
        if ($result) {
            header("Location: /TP2Web/Router.php?op=10");
        } else {
            header("Location: /TP2Web/Router.php?op=10");
        }
    }

}
