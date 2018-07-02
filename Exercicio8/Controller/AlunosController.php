<?php
namespace Controller;
use Model\Aluno;
class AlunosController {
	
  public function listar() {
    $aluno = new Aluno();
    $lista = $aluno->all();
    include './view/alunos/lista.php';
  }

  public function inserir($nome, $rua, $numero, $bairro, $cidade_id, $cep, $mail){
    $aluno = new Aluno();
    $aluno->insert($nome, $rua, $numero, $bairro, $cidade_id, $cep, $mail);
    $lista = $aluno->all();
    include './view/alunos/lista.php';
  }
}