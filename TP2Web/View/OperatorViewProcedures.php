<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Procedimentos</title>
        <script type = "text/javascript" src = "/TP2Web/View/Javascript/jquery.js"></script>
        <script type="text/javascript" src="/TP2Web/View/Javascript/AdminViewAuthentication.js"></script>
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
                    <h1>Área do operador</h1>
                </div>	
                <div class="row">
                    <div class="col-lg-10">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <th>Codigo</th>
                            <th>Procedimento</th>
                            <th>Preço</th>
                            </thead>
                            <?php foreach ($list as $line): ?>
                                <tr>
                                    <td><?= $line['id'] ?></td>
                                    <td><?= $line['name'] ?></td>
                                    <td><?= $line['price'] ?></td>
                                </tr>
                            <?php endforeach ?>
                        </table>
                    </div>
                    <div class="col-lg-2">
                        <form action="/TP2Web/Router.php?op=11" onsubmit="return validateUpdate()" method="post">
                            <label for="idUpdate">Modificar: </label>
                            <div class="row">
                                <input type="number" name="id" id="idUpdate" placeholder="id">
                                <input type="number" name="price" id="price" placeholder="Preço">
                            </div>
                            <br>
                            <input type="submit" class="btn btn-danger">
                        </form> 
                        <a href="/TP2Web/View/OperatorArea.php" class="btn btn-secondary">Retornar</a>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </body>
</html>
