<?php
namespace Controller;
use Model\Cidade;
class CidadesController {
  
  public function listar() {
    $cidade = new Cidade;
    $lista = $cidade->all();
    include './view/cidades/lista.php';
  }

  public function inserir($nome, $estado_id){
    $cidade = new Cidade();
    $cidade->insert($nome, $cidade_id);
    $lista = $cidade->all();
    include './view/cidades/lista.php';
  }
}