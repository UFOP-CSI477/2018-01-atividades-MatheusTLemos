<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Exames Agendados</title>
        <script type = "text/javascript" src = "../TP2Web/View/Javascript/UserAuthentication.js"></script>
    </head>
    <body>
        <h1>Exames Agendados</h1>

        <table>
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
</body>
</html>
