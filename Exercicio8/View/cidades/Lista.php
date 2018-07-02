<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de cidades</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <style type="text/css">
      .jumbotron{
        background-color: blue;
        color: white;
      }
    </style>
  </head>
  <body>
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6 jumbotron">
        <h1>Lista de Cidades</h1>
      </div>
      <div class="col-lg-3"></div>
    </div>
    <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">

    <table class="table table-striped table-bordered">

      <tr>
        <th>Código</th>
        <th>Cidade</th>
        <th>Estado</th>
      </tr>

      <?php foreach( $lista as $linha ): ?>
      <tr>
        <td><?= $linha['id'] ?></td>
        <td><?= $linha['nome'] ?></td>
        <td><?= $linha['sigla'] ?></td>
      </tr>
    <?php endforeach ?>

    </table>
    
    </div>
    <div class="col-lg-3"></div>
  </div>
  </body>
</html>