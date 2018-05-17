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
			include "../View/AdminArea.php"
		}else{
			echo "Inserção não realizada";
			include "../View/CreateProcedure.php"
		}
	}
	function removeProcedure($id){
		$proc = new Procedures;
		$result = $proc->removeProcedure($id);
		if($result){
			echo "Remoção realizada com sucesso";
			include "../View/AdminArea.php"
		}else{
			echo "Remoção não realizada";
			include "../View/CreateProcedure.php"
		}
	}
}