<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Procedimentos</title>
        <script type = "text/javascript" src = "../TP2Web/View/Javascript/jquery.js"></script>
        <script type="text/javascript" src="../TP2Web/View/Javascript/AdminViewAuthentication.js"></script>
    </head>
    <body>
        <table>
            <thead>
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
        
    <form action="../TP2Web/Router.php?op=11" onsubmit="return validateUpdate()" method="post">
        <label for="idUpdate">Modificar: </label>
        <input type="number" name="id" id="idUpdate" placeholder="id">
        <input type="number" name="price" id="price" placeholder="Preço">
        <input type="submit">
    </form> 
</body>
</html>
