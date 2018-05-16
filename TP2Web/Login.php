<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<script type="text/javascript" src="./Javascript/UserAuthentication.js"></script>
</head>
<body>
	<form action="UserAuthentication.php"  onsubmit="return validate()" method="post">
		<label for="email">Email: </label>
		<input type="text" id="email">
		<label for="password">Senha: </label>
		<input type="password" id="password">
		<input type="submit" id="submit">
	</form>
</body>
</html>