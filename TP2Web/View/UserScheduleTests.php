<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Agendar Exame</title>
        <script type = "text/javascript" src = "/TP2Web/View/Javascript/jquery.js"></script>
        <script type="text/javascript" src="/TP2Web/View/Javascript/ScheduleAuthentication.js"></script>
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
                    <h1>Agendar Exame</h1>
                </div>
                <form action="/TP2Web/Router.php?op=5" onsubmit="return validate()" method="post">
                    <input type="date" id="date" name="date">
                    <select id="procedure" name="procedure">
                        <option value="">Selecione:</option>
                        <?php foreach ($list as $e): ?>
                            <option value="<?= $e['id'] ?>"><?= $e['name'] ?></option>
                        <?php endforeach ?>
                    </select>
                    <input type="submit" class="btn btn-danger" value="Confirmar">
                    <a href="/TP2Web/view/UserArea.php" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </body>
</html>