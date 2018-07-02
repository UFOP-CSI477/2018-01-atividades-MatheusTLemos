<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sistema de Controle Acadêmico</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <style type="text/css">
      .jumbotron { 
        background-color: blue;
        color: #ffffff;
      }
    </style>
  </head>
  <body>

    <?php
      session_start();
      if ( isset($_SESSION['mensagem']) ) {
        echo "<h2>" . $_SESSION['mensagem'] . "</h2>";
        unset($_SESSION['mensagem']);
      }
    ?>
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6 jumbotron">
          <h1>Sistema de Controle Acadêmico</h1>
      </div>
      <div class="col-lg-3"></div>
    </div>
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <div class="row">
        <a href="router.php?op=1">Listar alunos</a>
        </div>
        <div class="row">
        <a href="router.php?op=4">Listar cidade</a>
        </div>
        <div class="row">
        <a href="router.php?op=5">Listar estados</a>
      </div>
      </div>
      <div class="col-lg-3"></div>
    </div>
  </body>
</html>