<?php
  $mysql = 'mysql:host=localhost;dbname=analyses';
  $dbemail = 'root';
  $dbpassword = '';
  $db = new PDO($mysql, $dbemail, $dbpassword);

  $procedures = $db->query("SELECT name, price FROM procedures ORDER by name");

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sistema de Controle de Solicitações de Análises Laboratoriais</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="./Homepage.js"></script>

    <style>
		.jumbotron { 
    		background-color: crimson;
    		color: #ffffff;
		}

		.btn-row, .input-col{
			display:flex;
    	flex-flow:row wrap;
    	justify-content:center;
		}

    .btn{
      width: 30%;
    }
	</style>

</head>

<body>
  	<div class="row">
  		<div class="col-lg-2"></div>
  		<div class="col-lg-8 jumbotron">
  			<h1>Sistema de Controle de Solicitações de Análises Laboratoriais</h1>
  		</div>
  		<div class="col-lg-2"></div>
  	</div>
  	<div class="row">
  		<div class="col-lg-2"></div>
    	<div class="col-lg-2">
    		<form action="UserAuthentication.php" method="post">
    			<div class="row">
    				<div class="col-lg-4">
    					<label for="email">Email: </label>
    				</div>
    				<div class="col-lg-8 input-col">
    					<input type="text" name="email" id="email" class="input-box">
    				</div>
    			</div>
    			<div class="row pt-3">
    				<div class="col-lg-4">
	    				<label for="password">Senha: </label>
	    			</div>
	    			<div class="col-lg-8 input-col">
    					<input type="password" name="password" id="password" class="input-box">
    				</div>
    			</div>
    			<div class="row btn-row pt-3">
    				<button type="button" class="btn btn-danger" name="login"><input type="submit" name="log">Login</button>
    			</div>
          <div class="row btn-row pt-3">
            <button type="button" class="btn" name="signin">Registrar</button>
          </div>
			</form>
		</div>
		<div class="col-lg-6">
    		<table type="table" class="table table-striped table-bordered">
    		<thead>
    			<th>Exame</th>
    			<th>Data</th>
    		</thead>
    		<?php foreach( $procedures as $line ): ?>
      			<tr>
        			<td><?= $line['name'] ?></td>
        			<td><?= $line['price'] ?></td>
      			</tr>
   			<?php endforeach ?>
    		</table>
    	</div>
		<div class="col-lg-2"></div>
	</div>
  </body>
</html>