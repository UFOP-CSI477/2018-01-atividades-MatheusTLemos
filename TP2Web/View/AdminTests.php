<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Procedimentos</title>
        <script type = "text/javascript" src = "/TP2Web/View/Javascript/jquery.js"></script>
        <script type="text/javascript" src="/TP2Web/View/Javascript/AdminTestsAuthentication.js"></script>
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
                    <h1>Exames</h1>
                </div>	
                <div class="row">	
                    <div class="col-lg-10">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <th>ID</th>
                            <th>ID Paciente</th>
                            <th>ID Procedimento</th>
                            <th>Data</th>
                            </thead>
                            <?php foreach ($results as $line): ?>
                                <tr>
                                    <td><?= $line['id'] ?></td>
                                    <td><?= $line['user_id'] ?></td>
                                    <td><?= $line['procedure_id'] ?></td>
                                    <td><?= $line['date'] ?></td>
                                </tr>
                            <?php endforeach ?>
                        </table>
                    </div>
                    <div class="col-lg-2">
                        <form action="/TP2Web/Router.php?op=19" onsubmit="return validateRemove()" method="post">
                            <label for="idRemove">Remover: </label>
                            <input type="number" name="id" id="idRemove">
                            <input type="submit" class="btn btn-danger">
                        </form>

                        <form action="/TP2Web/Router.php?op=20" onsubmit="return validateFilterUser()" method="post">
                            <label for="userId">Filtrar por paciente: </label>
                            <input type="number" name="userId" id="userId">
                            <input type="submit" class="btn btn-danger">
                        </form>

                        <form action="/TP2Web/Router.php?op=21" onsubmit="return validateFilterProcedure()" method="post">
                            <label for="userId">Filtrar por procedimento: </label>
                            <input type="number" name="procedureId" id="procedureId">
                            <input type="submit" class="btn btn-danger">
                            <a href="/TP2Web/view/AdminArea.php" class="btn btn-secondary">Cancelar</a>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
    </body>
</html>