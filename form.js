function validateForm() {
    var inputs = document.getElementsByTagName("input");
    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].value === "") {
            alert("Tous les champs doivent être remplis");
            return false;
        }
    }
    return true;
}