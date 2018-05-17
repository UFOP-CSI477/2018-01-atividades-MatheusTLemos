function validate() {
    $date = document.getElementById("date").value;
    $procedure = document.getElementById("procedure").value;
    if ($date === "" || $date === null) {
        alert("Data invalida");
        return false;
    } else if ($procedure === "" || $procedure === null) {
        alert("Selecione um procedimento");
        return false;
    } else {
        return true;
    }
}

$(document).ready(function () {
    console.log("Document loaded.");
});