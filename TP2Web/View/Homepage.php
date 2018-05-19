<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sistema de Controle de Solicitações de Análises Laboratoriais</title>
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
                    <h1>Sistema de Controle de Solicitações de Análises Laboratoriais</h1>
                </div>	
                <div class="row">
                    <div class="col-lg-8">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <th>Procedimento</th>
                            <th>Preço</th>
                            </thead>
                            <?php foreach ($list as $line): ?>
                                <tr>
                                    <td><?= $line['name'] ?></td>
                                    <td><?= $line['price'] ?></td>
                                </tr>
                            <?php endforeach ?>
                        </table>
                    </div>
                    <div class="col-lg-4">
                        <a href="/TP2Web/View/Login.php" class="btn btn-danger">Login</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </body>
</html>