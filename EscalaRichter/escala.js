function validar(){
	if(isNaN(document.getElementById('amplitude').value)||document.getElementById('amplitude').value==''){
		alert("Valor de amplitude invalido. Por favor insira um numero.");
		return false;
	}
	if(isNaN(document.getElementById('ondasuperficial').value)||document.getElementById('ondasuperficial').value==''){
		alert("Horario da onda superficial invalido. Por favor insira um numero.");
		return false;
	}
	if(isNaN(document.getElementById('pressaomaxima').value)||document.getElementById('pressaomaxima').value==''){
		alert("Horario da pressão maxima invalido. Por favor insira um numero.");
		return false;
	}
	if(document.getElementById('pressaomaxima').value<=document.getElementById('ondasuperficial').value){
		alert("O horario da pressão maxima não pode ser menor do que o horario da onda superficial.")
		return false;
	}
	return true;
}

function calcular(){
	x=logBase10(document.getElementById('amplitude').value)+3*logBase10(8*(document.getElementById('pressaomaxima').value-document.getElementById('ondasuperficial').value))-2.92;
	y=document.getElementById('tabela');
	y.rows[1].cells[0].innerHTML = x.toFixed(1);
	if(x<3.5){
		y.rows[1].cells[1].innerHTML = "Geralmente não sentido, mas gravado.";
	}else if(x<5.5){
		y.rows[1].cells[1].innerHTML = "Às vezes sentido, mas raramente causa danos.";
	}else if(x<6.1){
		y.rows[1].cells[1].innerHTML = "No maximo causa pequenos danos a predios bem construidos, mas pode danificar seriamente casas mal construidas em regiões proximas.";
	}else if(x<7){
		y.rows[1].cells[1].innerHTML = "Pode ser destrutivo em areas em torno de ate 100Km do epicentro.";
	}else if(x<8){
		y.rows[1].cells[1].innerHTML = "Grande terremoto, pode causar serios danos em uma grande faixa.";
	}else{
		y.rows[1].cells[1].innerHTML = "Enorme terremoto, pode causar danos em muitas areas mesmo que estejam a centenas de quilometros.";
	}
}

function logBase10(x){
	return Math.log(x) / Math.LN10;
}

$(document).ready(function(){
	$("button[name='calcular']").click(function(){
		if(validar()){
			calcular();
		}
	});
});
