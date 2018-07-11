<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
	<title>Alterar Procedimento</title>
</head>
<body>
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="jumbotron">
			<p class="h1 text-center">Alterar Procedimento</p>
		</div>
		<div class="row">
			<div class="col-md-4 text-right">	
				<form action="<?php echo e(action('proceduresController@update', $id)); ?>" method="post">
					<?php echo csrf_field(); ?>
					<div class="col-md-10">
						<input type="text" name="name" placeholder="Nome" class="form-control" value="<?php echo e($procedure->name); ?>" required>
						<input type="number" name="price" placeholder="Preço" class="form-control" value="<?php echo e($procedure->price); ?>" required>
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