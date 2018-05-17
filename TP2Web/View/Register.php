<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro</title>
	<script type="text/javascript" src="./Javascript/RegisterAuthentication.js"></script>
</head>
<body>
	<form action="/TP2Web/Router.php?op=2"  onsubmit="return validate()" method="post">
		<label for="email">Nome: </label>
		<input type="text" id="name" name="name">
		<label for="email">Email: </label>
		<input type="text" id="email" name="email">
		<label for="password">Senha: </label>
		<input type="password" id="password" name="password">
		<input type="submit" id="submit">
	</form>
</body>
</html>