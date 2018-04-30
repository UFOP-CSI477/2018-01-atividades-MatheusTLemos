
function corrigir(){
	if(document.getElementById("triangulo").value==1){
		alert("Triangulo correto");
	}else{
		alert("Triangulo incorreto");
	}
	if(document.getElementById("quadrado").value==2){
		alert("Quadrado correto");
	}else{
		alert("Quadrado incorreto");
	}
	if(document.getElementById("circulo").value==3){
		alert("Circulo correto");
	}else{
		alert("Circulo incorreto");
	}
	if(document.getElementById("retangulo").value==1){
		alert("retangulo correto");
	}else{
		alert("Retangulo incorreto");
	}
}


$(document).ready(function(){
	console.log("Documento carregado.");
	$("button[name='corrigir']").click(function(){
		corrigir();
	});

	$("button[name='voltar']").click(function(){
		window.location.href="./didatica-2.html";
	});
});