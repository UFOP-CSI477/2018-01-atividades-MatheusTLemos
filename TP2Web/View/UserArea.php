<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Area do Paciente</title>
        <script type = "text/javascript" src = "/TP2Web/View/Javascript/jquery.js"></script>
        <script type = "text/javascript" src = "/TP2Web/Javascript/UserAuthentication.js"></script>
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
                    <h1>Área do Paciente</h1>
                </div>
                <a href="/TP2Web/Router.php?op=3" class="btn btn-danger">Verificar exames</a>
                <a href="/TP2Web/Router.php?op=4" class="btn btn-danger">Agendar exames</a>
                <a href="/TP2Web/Router.php?op=0" class="btn btn-secondary">Logout</a>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </body>
</html>
