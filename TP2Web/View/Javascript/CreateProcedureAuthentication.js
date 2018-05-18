function validate(){
	$name = document.getElementById("name").value;
	$price = document.getElementById("price").value;
	if($name===""||name===null){
		alert("Nome invalido");
		return false;
	}else if($price===""||$price===null || isNaN($price)){
		alert("Preço invalido");
		return false;
	}else{
		return true;
	}
}

$(document).ready(function(){
	console.log("Document loaded.");
});
