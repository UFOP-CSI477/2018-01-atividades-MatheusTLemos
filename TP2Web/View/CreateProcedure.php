<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Novo Procedimento</title>
        <script type = "text/javascript" src = "../TP2Web/View/Javascript/jquery.js"></script>
	<script type="text/javascript" src="../TP2Web/View/Javascript/CreateProcedureAuthentication.js"></script>
</head>
<body>
	<form action="../Router?op=6" onsubmit="return validate()" method="post">
		<input type="text" name="name" id="name">
		<input type="number" name="price" id="price">
		<input type="submit" name="submit" id="submit">
	</form>
</body>
</html>
