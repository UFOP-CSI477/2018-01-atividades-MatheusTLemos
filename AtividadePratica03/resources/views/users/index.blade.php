<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
	<title>Usuarios</title>
</head>
<body>
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="jumbotron">
			<p class="h1 text-center">Usuarios</p>
		</div>
		<div class="row">
			<div class="col-md-8">
				<table class="table table-bordered table-striped">
					<thead>
						<th>Nome</th>
						<th>Email</th>
						<th>Tipo</th>
						<th colspan="2">Opções</th>
					</thead>
					<tbody>
						<?php foreach ($users as $line): ?>
							<tr>
								<td>{{$line['name']}}</td>
								<td>{{$line['email']}}</td>
								@if ($line['type']==1)
									<td>Administrador</td>
								@elseif ($line['type']==2)
									<td>Operador</td>
								@else
									<td>Usuario</td>
								@endif
								<td><a href="{{action('usersController@edit', $line['id'])}}" class="btn btn-warning">Editar</a></td>
        						<td><a href="{{action('usersController@destroy', $line['id'])}}" class="btn btn-danger">Excluir</a></td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
			<div class="col-md-4 text-right">	
				<div class="row">
					<form action="{{action('usersController@filter')}}">
						<div class="col-md-10">
							<input type="text" name="name" placeholder="Nome" class="form-control">
						</div>
						<div class="col-md-2">
							<button type="submit" class="btn">Filtrar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-2"></div>
</body>
</html>