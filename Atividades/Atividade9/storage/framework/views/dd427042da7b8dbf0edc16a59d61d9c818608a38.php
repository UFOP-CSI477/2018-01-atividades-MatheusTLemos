<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
	<title></title>
</head>
<body>
	<div class="container">
	<div class="row jumbotron">
		<h1>Alunos</h1>
	</div>	
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Rua</th>
        <th>Cidade</th>
        <th>Numero</th>
        <th>Bairro</th>
        <th>CEP</th>
        <th colspan="2">Opções</th>
      </tr>
    </thead>
    <tbody>
      
      <?php $__currentLoopData = $alunos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aluno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($aluno['id']); ?></td>
        <td><?php echo e($aluno['nome']); ?></td>
        <td><?php echo e($aluno['rua']); ?></td>
        <td><?php echo e($aluno['cidade']); ?></td>
        <td><?php echo e($aluno['numero']); ?></td>
        <td><?php echo e($aluno['bairro']); ?></td>
        <td><?php echo e($aluno['cep']); ?></td>
        
        <td><a href="<?php echo e(action('AlunosController@edit', $aluno['id'])); ?>" class="btn btn-warning">Editar</a></td>
        <td>
          <form action="<?php echo e(action('AlunosController@destroy', $aluno['id'])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Deletar</button>
          </form>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  <a href="<?php echo e(url('/alunos/create')); ?>">
    <button class="btn">Novo Aluno</button>
  </a>
  </div>
</body>
</html>