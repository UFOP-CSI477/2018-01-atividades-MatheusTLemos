<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Exames Agendados</title>
        <script type = "text/javascript" src = "/TP2Web/View/Javascript/jquery.js"></script>
        <script type = "text/javascript" src = "/TP2Web/View/Javascript/UserAuthentication.js"></script>
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
                    <h1>Exames Agendado</h1>
                </div>
                <table class="table table-striped table-bordered">
                    <thead>
                    <th>Procedimento</th>
                    <th>Data</th>
                    </thead>
                    <?php foreach ($results as $line): ?>
                        <tr>
                            <td><?= $line['name'] ?></td>
                            <td><?= $line['date'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </table>
                <a href="/TP2Web/view/UserArea.php" class="btn btn-secondary">Retornar</a>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </body>
</html>
