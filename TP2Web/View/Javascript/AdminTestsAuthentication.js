function validateRemove() {
    $id = document.getElementById("idRemove").value;
    if ($id === "" || $id === null || isNaN($id)) {
        alert("ID invalida");
        return false;
    }
    return true;
}

function validateFilterUser() {
    $id = document.getElementById("userId").value;
    if ($id === "" || $id === null || isNaN($id)) {
        alert("ID invalida");
        return false;
    }
    return true;
}

function validateFilterProcedure() {
    $id = document.getElementById("procedureId").value;
    if ($id === "" || $id === null || isNaN($id)) {
        alert("ID invalida");
        return false;
    }
    return true;
}

$(document).ready(function () {
    console.log("Document loaded.");
});
