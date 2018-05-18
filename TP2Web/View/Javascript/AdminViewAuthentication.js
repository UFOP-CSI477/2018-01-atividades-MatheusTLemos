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

$(document).ready(function () {
    console.log("Document loaded.");
});
