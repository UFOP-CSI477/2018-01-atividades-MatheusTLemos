<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<script type="text/javascript" src="../TP2Web/View/Javascript/UserAuthentication.js"></script>
</head>
<body>
	<form action="../Router.php?op=1"  onsubmit="return validate()" method="post">
		<label for="email">Email: </label>
		<input type="text" id="email" name="email">
		<label for="password">Senha: </label>
		<input type="password" id="password" name="password">
		<input type="submit" id="submit">
	</form>
	<a href="Register.php">Registrar</a>
</body>
</html>