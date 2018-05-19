<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <script type = "text/javascript" src = "/TP2Web/View/Javascript/jquery.js"></script>
        <script type="text/javascript" src="/TP2Web/View/Javascript/UserAuthentication.js"></script>
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
                    <h1>Login</h1>
                </div>	
                <form action="/TP2Web/Router.php?op=1"  onsubmit="return validate()" method="post">
                    <label for="email">Email: </label>
                    <input type="text" id="email" name="email">
                    <label for="password">Senha: </label>
                    <input type="password" id="password" name="password">
                    <input type="submit" id="submit" class="btn btn-danger" value="Login">
                    <a href="/TP2Web/View/Register.php" class="btn btn-danger">Registrar</a>
                    <a href="/TP2Web/Index.php" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </body>
</html>