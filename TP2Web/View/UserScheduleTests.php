<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Agendar Exame</title>
        <script type = "text/javascript" src = "../TP2Web/View/Javascript/jquery.js"></script>
        <script type="text/javascript" src="../TP2Web/View/Javascript/ScheduleAuthentication.js"></script>
    </head>
    <body>
        <h1>Agendar Exame</h1>

        <form action="../TP2Web/Router.php?op=5" onsubmit="return validate()" method="post">
            <input type="date" id="date" name="date">
            <select id="procedure" name="procedure">
                <option value="">Selecione:</option>
                <?php foreach ($list as $e): ?>
                    <option value="<?= $e['id'] ?>"><?= $e['name'] ?></option>
                <?php endforeach ?>
            </select>
            <input type="text" id="price" name="price" placeholder="0,00">
            <input type="submit">
        </form>
    </body>
</html>