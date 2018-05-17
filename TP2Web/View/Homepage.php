<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema de Controle de Solicitações de Análises Laboratoriais</title>
</head>
<body>
	<h1>Sistema de Controle de Solicitações de Análises Laboratoriais</h1>

	<table>
		<thead>
			<th>Procedimento</th>
			<th>Preço</th>
		</thead>
		<?php foreach($list as $line): ?>
			<tr>
				<td><?= $line['name'] ?></td>
				<td><?= $line['price'] ?></td>
			</tr>
		<?php endforeach ?>
	</table>

	<a href="./View/Login.php">Login</a>
</body>
</html>