function validar(){
	var username=document.getElementById('email').value;
	var password=document.getElementById('password').value;

	if(username===null||username==""){
		alert("insira um nome de usuario");
		return;
	}else if(password===null||password==""){
		alert("Insira uma senha");
		return;
	}
}

$(document).ready(function(){
	$("button[name='login']").click(function(){
		validar();
	});
});