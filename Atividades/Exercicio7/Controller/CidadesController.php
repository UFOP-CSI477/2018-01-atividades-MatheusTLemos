<?php
namespace Controller;
use Model\Cidade;
use Model\Estado;
class CidadesController {
  
  public function listar() {
    $cidade = new Cidade;
    $lista = $cidade->all();
    include './view/cidades/lista.php';
  }

  public function create() {
    $estados = new Estado;
    $lista = $estados->all();
    include './view/cidades/create.php';
  }

  public function store($request) {
    $nome = $request['nome'];
    $estado_id = $request['estado_id'];
    $cidade = new Cidade();
    $cidade->setNome($nome);
    $cidade->setEstadoId($estado_id);
    $cidade->save();
    session_start();
    $_SESSION['mensagem'] = "Cidade inserida com sucesso!";
    $this->redir();
  }

  private function redir() {
    header("Location: http://localhost/Exercicio7");
    exit();
  }
}