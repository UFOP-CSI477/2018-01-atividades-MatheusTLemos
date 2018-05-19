function validateRemove() {
    $id = document.getElementById("idRemove").value;
    if ($id === "" || $id === null || isNaN($id)) {
        alert("ID invalida");
        return false;
    }
    return true;

}

function validateUpdate() {
    $id = document.getElementById("idUpdate").value;
    if ($id === "" || $id === null || isNaN($id)) {
        alert("ID invalida");
        return false;
    }
    return true;
}

function validateInsert(){
    $name= document.getElementById("nameInsert").value;
    $email= document.getElementById("emailInsert").value;
    $password= document.getElementById("passwordInsert").value;
    $type= document.getElementById("typeInsert").value;
    if($name==="" || $name===null || $name==="Nome"){
        alert("Nome Invalido");
        return false;
    }else if($email==="" || $email===null || $name==="E-mail"){
        alert("E-mail Invalido");
        return false;
    }else if($password==="" || $password===null || $password==="Senha"){
        alert("Senha Invalida");
        return false;
    }else if($type===""){
        alert("Tipo invalido");
        return false;
    }
    return true;
}

$(document).ready(function () {
    console.log("Document loaded.");
});
