<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
	<title>Exames</title>
</head>
<body>
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="jumbotron">
			<p class="h1 text-center">Exames</p>
		</div>
		<div class="row">
			<div class="col-md-8">
				<table class="table table-bordered table-striped">
					<thead>
						<th>Nome</th>
						<th>Data</th>
						<?php if($userType!=2): ?>
							<th colspan="2">Opções</th>
						<?php endif; ?>
					</thead>
					<tbody>
						<?php foreach ($tests as $line): ?>
							<tr>
								<td><?php echo e($line->pnome); ?></td>
								<td><?php echo e($line->date); ?></td>
								<?php if($userType!=2): ?>
									<td><a href="<?php echo e(action('testsController@edit', $line->id)); ?>" class="btn btn-warning">Editar</a></td>
        							<td><a href="<?php echo e(action('testsController@destroy', $line->id)); ?>" class="btn btn-danger">Excluir</a></td>
								<?php endif; ?>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
			<div class="col-md-4 text-right">	
				<?php if($userType==3): ?>
					<div class="text-center">
						<br>
						<a href="<?php echo e(url('/exames/create')); ?>"><button class="btn">Novo</button></a>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="col-md-2"></div>
</body>
</html>