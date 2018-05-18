<?php

namespace Controller;

use Model\Procedures;

class ProceduresController {

    function listAll($targetView) {
        $proc = new Procedures;
        $list = $proc->listAll();
        include $targetView;
    }

    function insertProcedure($name, $price) {
        $proc = new Procedures;
        $result = $proc->insertProcedure($name, $price);
        if ($result) {
            echo "Inserção realizada com sucesso";
            include "../TP2Web/View/AdminArea.php";
        } else {
            echo "Inserção não realizada";
            include "../TP2Web/View/CreateProcedure.php";
        }
    }

    function removeProcedure($id) {
        $proc = new Procedures;
        $result = $proc->removeProcedure($id);
        if ($result) {
            echo "Remoção realizada com sucesso";
            header("Location: ../TP2Web/Router.php?op=7");
        } else {
            echo "Remoção não realizada";
            header("Location: ../TP2Web/Router.php?op=7");
        }
    }

    function modifyProcedure($id, $name, $price) {
        $proc = new Procedures;
        $result = $proc->modifyProcedure($id, $name, $price);
        if ($result) {
            echo "Atualização realizada com sucesso";
            header("Location: ../TP2Web/Router.php?op=7");
        } else {
            echo "Atualização não realizada";
            header("Location: ../TP2Web/Router.php?op=7");
        }
    }

    function operatorModifyProcedure($id, $price) {
        $proc = new Procedures;
        $result = $proc->operatorModifyProcedure($id, $price);
        if ($result) {
            echo "Atualização realizada com sucesso";
            header("Location: ../TP2Web/Router.php?op=10");
        } else {
            echo "Atualização não realizada";
            header("Location: ../TP2Web/Router.php?op=10");
        }
    }

}
