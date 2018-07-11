<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
	<title>Alterar usuario</title>
</head>
<body>
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="jumbotron">
			<p class="h1 text-center">Alterar usuario</p>
		</div>
		<div class="row">
			<div class="col-md-4 text-right">	
				<form action="<?php echo e(action('usersController@update', $id)); ?>" method="post">
					<?php echo csrf_field(); ?>
        			<?php echo e(method_field('PUT')); ?>

					<div class="col-md-10">
						<input type="text" name="name" placeholder="Nome" class="form-control" value="<?php echo e($user->name); ?>" required>
						<input type="text" name="email" placeholder="Email" class="form-control" value="<?php echo e($user->email); ?>" required>
						<select name="type" class="form-control-lg" required>
							<option value="<?php echo e($user->type); ?>">Tipo</option>
							<option value="1">Administrador</option>
							<option value="2">Operador</option>
							<option value="3">Usuario</option>
						</select>
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn">Salvar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-2"></div>
</body>
</html>