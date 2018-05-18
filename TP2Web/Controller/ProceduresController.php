<?php
namespace Controller;
use Model\Procedures;
class ProceduresController {
	function listAll($targetView){
		$proc = new Procedures;
		$list = $proc->listAll();
		include $targetView;
	}
	function insertProcedure($name, $price){
		$proc = new Procedures;
		$result = $proc->insertProcedure($name, $price);
		if($result){
			echo "Inserção realizada com sucesso";
			include "../TP2Web/View/AdminArea.php";
		}else{
			echo "Inserção não realizada";
			include "../TP2Web/View/CreateProcedure.php";
		}
	}
	function removeProcedure($id){
		$proc = new Procedures;
		$result = $proc->removeProcedure($id);
		if($result){
			echo "Remoção realizada com sucesso";
			include "../TP2Web/View/AdminArea.php";
		}else{
			echo "Remoção não realizada";
			include "../TP2Web/View/AdminViewProcedures.php";
		}
	}
        function modifyProcedure($id, $name, $price){
		$proc = new Procedures;
		$result = $proc->modifyProcedure($id, $name, $price);
		if($result){
			echo "Atualização realizada com sucesso";
			include "../TP2Web/View/AdminArea.php";
		}else{
			echo "Atualização não realizada";
			include "../TP2Web/View/AdminViewProcedures.php";
		}
	}
}