<?php
	include_once '../TP2Web/Model/Procedures.php';
	include_once '../TP2Web/Controller/ProceduresController.php';
	use Controller\ProceduresController;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Procedimentos</title>
</head>
<body>
	<table>
		<thead>
			<th>Procedimento</th>
			<th>Preço</th>
		</thead>
		<?php foreach($list as $line): ?>
			<tr>
				<td><?= $line['id'] ?></td>
				<td><?= $line['name'] ?></td>
				<td><?= $line['price'] ?></td>
				<td>
					<?= 
						$id=$line['id'];
						$proceduresController= new ProceduresController;
						$result=$proceduresController->removeProcedure($id);
						if($result){
							echo "Remoção bem Sucedida";
							include "../View/AdminArea.php";
						}else{
							echo "Remoção não Sucedida";
							include "../View/AdminArea.php";
						}
					?>
				</td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>
