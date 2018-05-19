<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Exames Agendados</title>
        <script type = "text/javascript" src = "/TP2Web/View/Javascript/jquery.js"></script>
        <script type = "text/javascript" src = "/TP2Web/View/Javascript/UserAuthentication.js"></script>
        <script type = "text/javascript" src = "/TP2Web/View/Javascript/UserViewAuthentication.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <style>
            .jumbotron{
                background-color: crimson;
                color: white;
            }
            .select{
                width: 90%;
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
                <div class="row">
                    <div class="col-lg-10">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <th>ID</th>
                            <th>Procedimento</th>
                            <th>Data</th>
                            <th>Custo</th>
                            </thead>
                            <?php foreach ($results as $line): ?>
                                <tr>
                                    <td><?= $line['id'] ?></td>
                                    <td><?= $line['name'] ?></td>
                                    <td><?= $line['date'] ?></td>
                                    <td><?= $line['price'] ?></td>
                                </tr>
                            <?php endforeach ?>
                        </table>
                        <?php
                            echo 'Total de exames: ' . $totalCount['amount'] . " Custo total: " . $totalCount['cost'];
                        ?>
                    </div>
                    <div class="col-lg-2">
                        <form action="/TP2Web/Router.php?op=12" onsubmit="return validateRemove()" method="post">
                            <label for="idRemove">Remover: </label>
                            <input type="number" name="id" id="idRemove">
                            <input type="submit" class="btn btn-danger">
                        </form>
                        <form action="/TP2Web/Router.php?op=13" onsubmit="return validateUpdate()" method="post">
                            <label for="idUpdate">Modificar: </label>
                            <input type="number" name="id" id="idUpdate" placeholder="id">
                            <input type="date" name="date" id="date" placeholder="Data">
                            <select id="procedure" name="procedure" class="select">
                                <option value="">Selecione:</option>
                                <?php foreach ($list as $e): ?>
                                    <option value="<?= $e['id'] ?>"><?= $e['name'] ?></option>
                                <?php endforeach ?>
                            </select>
                            <input type="submit"class="btn btn-danger">
                            <a href="/TP2Web/View/UserArea.php" class="btn btn-secondary">Cancelar</a>
                        </form> 
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </body>
</html>
