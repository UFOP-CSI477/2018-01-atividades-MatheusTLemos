function validate() {
    $id = document.getElementByName("id").value;
    if ($id === "" || $id === null || isNaN($id)) {
        alert("ID invalida");
        return false;
    }
    return true;

}

$(document).ready(function () {
    console.log("Document loaded.");
});
