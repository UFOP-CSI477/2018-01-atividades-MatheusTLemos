function validate(){
	$name = document.getElementById("name").value;
	$email = document.getElementById("email").value;
	$password = document.getElementById("password").value;
	if($name===""||name===null){
		alert("Nome invalido");
		return false;
	}else if($email===""||$email===null){
		alert("Endereço de email invalido");
		return false;
	}else if($password===""||$password===null){
		alert("Senha invalido");
		return false;
	}else{
		return true;
	}
}

$(document).ready(function(){
	console.log("Document loaded.");
});