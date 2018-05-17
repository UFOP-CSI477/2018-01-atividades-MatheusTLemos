function validate(){
	$email = document.getElementById("email").value;
	$password = document.getElementById("password").value;
	if($email===""||$email===null){
		alert("Endereço de email invalido");
		return false;
	}else if($password===""||$password===null){
		alert("Senha invalida");
		return false;
	}else{
		return true;
	}
}

$(document).ready(function(){
	console.log("Document loaded.");
});