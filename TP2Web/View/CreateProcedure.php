<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Novo Procedimento</title>
        <script type = "text/javascript" src = "/TP2Web/View/Javascript/jquery.js"></script>
        <script type="text/javascript" src="/TP2Web/View/Javascript/CreateProcedureAuthentication.js"></script>
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
                    <h1>Criar procedimento</h1>
                </div>	
                <div class="row">	
                    <form action="/TP2Web/Router?op=6" onsubmit="return validate()" method="post">
                        <input type="text" name="name" id="name">
                        <input type="number" name="price" id="price">
                        <input type="submit" name="submit" id="submit" class="btn btn-danger">
                        <a href="/TP2Web/View/AdminArea.php" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </body>
</html>

