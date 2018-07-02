<?php

include './model/Database.php';
include './model/Aluno.php';
include './model/Cidade.php';
include './model/Estado.php';
include './controller/AlunosController.php';
include './controller/CidadesController.php';
include './controller/EstadosController.php';

use Controller\AlunosController;
use Controller\CidadesController;
use Controller\EstadosController;
$op = $_GET['op'];
if ( $op == 1 ) {
  $alunoController = new AlunosController;
  $alunoController->listar();
} else if ( $op == 4 ) {
  $cidadeController = new CidadesController;
  $cidadeController->listar();
} else if( $op == 5) {
  $estadoController = new EstadosController;
  $estadoController->listar();
}