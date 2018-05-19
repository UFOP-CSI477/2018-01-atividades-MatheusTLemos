<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Área do administrador</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <style>
            .jumbotron{
                background-color: crimson;
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="row jumbotron">
                    <h1>Área do administrador</h1>
                </div>	
                <div class="row">
                    <a href="/TP2Web/view/CreateProcedure.php" class="btn btn-danger">Inserir novo procedimento</a>
                    <a href="/TP2Web/Router.php?op=7" class="btn btn-danger">Visualizar procedimentos</a>
                    <a href="/TP2Web/Router.php?op=14" class="btn btn-danger">Visualizar usuarios</a>
                    <a href="/TP2Web/Router.php?op=15" class="btn btn-danger">Visualizar exames</a>
                    <a href="/TP2Web/Router.php?op=0" class="btn btn-secondary">Logout</a>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </body>
</html>
