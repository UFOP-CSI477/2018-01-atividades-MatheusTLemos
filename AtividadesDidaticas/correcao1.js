function corrigir(){

	if(document.getElementById('sabonete').checked){
		alert("Grupo 1 correto");
	}else{
		alert("Grupo 1 incorreto");
	}
	if(document.getElementById('algodaodoce').checked){
		alert("Grupo 2 correto");
	}else{
		alert("Grupo 2 incorreto");
	}
	if(document.getElementById('maquinadelavar').checked){
		alert("Grupo 3 correto");
	}else{
		alert("Grupo 3 incorreto");
	}
	if(document.getElementById('chavedefenda').checked){
		alert("Grupo 4 correto");
	}else{
		alert("Grupo 4 incorreto");
	}
}

$(document).ready(function(){
	console.log("Documento carregado.");
	$("button[name='corrigir']").click(function(){
		corrigir();
	});

	$("button[name='continuar']").click(function(){
		window.location.href="./didatica-3.html";
	});
});