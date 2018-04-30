function validar(){
	if(isNaN(document.getElementById('altura').value)||document.getElementById('altura').value==''){
		alert("Altura invalida. Por favor insira um numero.");
		return false;
	}
	if(isNaN(document.getElementById('peso').value)||document.getElementById('peso').value==''){
		alert("Peso invalido. Por favor insira um numero.");
		return false;
	}
	return true;
}

function calcular(){
	x=(document.getElementById('peso').value)/(document.getElementById('altura').value*document.getElementById('altura').value);
	z1=18.5*(document.getElementById('altura').value*document.getElementById('altura').value);
	z2=24.9*(document.getElementById('altura').value*document.getElementById('altura').value);
	y=document.getElementById('tabela');
	y.rows[1].cells[0].innerHTML = x.toFixed(1);
	y.rows[1].cells[2].innerHTML = (z1.toFixed(1)+"-"+z2.toFixed(1));
	if(x<18.5){
		y.rows[1].cells[1].innerHTML = "Subnutrição.";
	}else if(x<24.9){
		y.rows[1].cells[1].innerHTML = "Peso saudavel.";
	}else if(x<29.9){
		y.rows[1].cells[1].innerHTML = "Sobrepeso.";
	}else if(x<34.9){
		y.rows[1].cells[1].innerHTML = "Obesidade grau 1.";
	}else if(x<39.9){
		y.rows[1].cells[1].innerHTML = "Obesidade grau 2.";
	}else{
		y.rows[1].cells[1].innerHTML = "Obesidade grau 3.";
	}
}

$(document).ready(function(){
	$("button[name='calcular']").click(function(){
		if(validar()){
			calcular();
		}
	});
});