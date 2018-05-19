<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Usuarios</title>
        <script type = "text/javascript" src = "/TP2Web/View/Javascript/jquery.js"></script>
        <script type="text/javascript" src="/TP2Web/View/Javascript/AdminUserAuthentication.js"></script>
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
                    <h1>Usuarios</h1>
                </div>	
                <div class="row">	
                    <div class="col-lg-10">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Senha</th>
                            <th>Tipo</th>
                            </thead>
                            <?php foreach ($list as $line): ?>
                                <tr>
                                    <td><?= $line['id'] ?></td>
                                    <td><?= $line['name'] ?></td>
                                    <td><?= $line['email'] ?></td>
                                    <td><?= $line['password'] ?></td>
                                    <td><?= $line['type'] ?></td>
                                </tr>
                            <?php endforeach ?>
                        </table>
                    </div>
                    <div class="col-lg-2">
                        <form action="/TP2Web/Router.php?op=16" onsubmit="return validateRemove()" method="post">
                            <label for="idRemove">Remover usuario: </label>
                            <input type="number" name="id" id="idRemove">
                            <input type="submit" class="btn btn-danger">
                        </form>

                        <form action="/TP2Web/Router.php?op=17" onsubmit="return validateUpdate()" method="post">
                            <label for="idUpdate">Modificar: </label>
                            <input type="number" name="id" id="idUpdate" placeholder="id">
                            <input type="text" name="name" id="name" placeholder="Nome">
                            <input type="text" name="email" id="email" placeholder="E-mail">
                            <input type="text" name="password" id="password" placeholder="Senha">
                            <select name="type" id="type">
                                <option value="">Tipo</option>
                                <option value="3">Paciente</option>
                                <option value="2">Operador</option>
                                <option value="1">Administrador</option>
                            </select>
                            <input type="submit"class="btn btn-danger">
                        </form>
                        
                        <form action="/TP2Web/Router.php?op=18" onsubmit="return validateInsert()" method="post">
                            <label for="idUpdate">Novo Usuario</label>
                            <input type="text" name="name" id="nameInsert" placeholder="Nome">
                            <input type="text" name="email" id="emailInsert" placeholder="E-mail">
                            <input type="text" name="password" id="passwordInsert" placeholder="Senha">
                            <select name="type" id="typeInsert">
                                <option value="">Tipo</option>
                                <option value="3">Paciente</option>
                                <option value="2">Operador</option>
                                <option value="1">Administrador</option>
                            </select>
                            <input type="submit"class="btn btn-danger">
                            <a href="/TP2Web/View/AdminArea.php" class="btn btn-secondary">Cancelar</a>
                        </form>
                        
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
    </body>
</html>