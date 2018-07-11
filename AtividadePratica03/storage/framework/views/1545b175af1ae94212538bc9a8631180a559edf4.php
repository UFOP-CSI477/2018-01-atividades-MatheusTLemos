<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
	<title>Novo Procedimento</title>
</head>
<body>
	<div class="col-md-2"></div>
	<div class="col-md-8">
		 <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="row jumbotron">
                    <h1>Agendar Exame</h1>
                </div>
                <form action="<?php echo e(action('testsController@store')); ?>" method="post">
                	<?php echo csrf_field(); ?>
                    <input type="date" id="date" name="date" class="form-control">
                    <select id="procedure" name="procedure" class="form-control-lg">
                        <option value="">Selecione:</option>
                        <?php foreach ($list as $e): ?>
                            <option value="<?= $e['id'] ?>"><?= $e['name'] ?></option>
                        <?php endforeach ?>
                    </select>
                    <input type="submit" class="btn" value="Confirmar">
                </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
</body>
</html>