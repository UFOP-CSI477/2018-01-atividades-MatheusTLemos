<?php
namespace Controller;
use Model\Procedures;
class ProceduresController {
	function listAll($targetView){
		$proc = new Procedures;
		$list = $proc->listAll();
		include $targetView;
	}
}