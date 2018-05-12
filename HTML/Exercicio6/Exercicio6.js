function validar(){
	if(document.getElementById("nome")===null || document.getElementById("nome").value==""){
		alert("Insira um nome valido");
		return;
	}else if(document.getElementById("cpf")===null || document.getElementById("cpf").value.length==0){
		alert("Insira um CPF valido");
		return;
	}else if(document.getElementById("datanasc")===null || document.getElementById("datanasc").value==""){
		alert("Insira uma data de nascimento valida");
		return;
	}else if(document.getElementById("telefone")===null || document.getElementById("telefone").value==""){
		alert("Insira um telefone valido");
		return;
	}else if(document.getElementById("cep")===null || document.getElementById("cep").value==""){
		alert("Insira um CEP valido");
		return;
	}else if(document.getElementById("bairro")===null || document.getElementById("bairro").value==""){
		alert("Insira um bairro valido");
		return;
	}else if(document.getElementById("profissao")===null || document.getElementById("profissao").value==""){
		alert("Insira uma profissão valida");
		return;
	}else if(document.getElementById("cep")===null || document.getElementById("cep").value==""){
		alert("Insira um CEP valido");
		return;
	}else if(document.getElementById("escolaridade")===null || document.getElementById("escolaridade").value==""){
		alert("Insira um grau de escolaridade valido");
		return;
	}else if(document.getElementById("email")===null || document.getElementById("email").value==""){
		alert("Insira um email valido");
		return;
	}else if(document.getElementById("endereco")===null || document.getElementById("endereco").value==""){
		alert("Insira um endereço valido");
		return;
	}else if(document.getElementById("estado").value==0){
		alert("Insira um estado valido");
		return;
	}else if($('input[name=genero]:checked').length == 0){
		alert("Insira um genero valido");
		return;
	}
	window.location.href="./Exercicio5/Exercicio5Menu.html";
}


$(document).ready(function(){
	console.log("Documento carregado.");
	$("button[name='confirmar']").click(function(){
		validar();
	});
});