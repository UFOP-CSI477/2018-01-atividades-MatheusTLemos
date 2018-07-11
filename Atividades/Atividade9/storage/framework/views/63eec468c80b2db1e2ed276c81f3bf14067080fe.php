<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
	<title>Inserir Aluno</title>
</head>
<body>
	<div class="container">
		<form method="post" action="<?php echo e(action('AlunosController@store')); ?>">
			<?php echo csrf_field(); ?>
			<div class="row jumbotron">
				<h1>Inserir Aluno</h1>
			</div>
			<div class="row form-group">
				<div class="col-md-12">
					<input type="text" class="form-control" name="nome" placeholder="Nome">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-4">
					<input type="text" class="form-control" name="rua" placeholder="Rua">
				</div>
				<div class="col-md-4">
					<input type="number" class="form-control" name="numero" placeholder="Numero">
				</div>
				<div class="col-md-4">
					<select name="cidade" class="form-control">
						<option value="0">Selecione</option>
						<?php $__currentLoopData = $cidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($c->id); ?>"> <?php echo e($c->nome); ?></option>
                       	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-4">
					<input type="text" class="form-control" name="bairro" placeholder="Bairro">
				</div>
				<div class="col-md-4">
					<input type="number" class="form-control" name="cep" placeholder="CEP">
				</div>
				<div class="col-md-4">
					<input type="text" class="form-control" name="mail" placeholder="Mail">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-6">
					<input type="reset" class="btn" name="limpar" value="limpar">
				</div>
				<div class="col-md-6">
					<input type="submit" class="btn btn-primary" name="submit">
				</div>
			</div>
		</form>
	</div>
</body>
</html>
