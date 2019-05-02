
function validatePassword() {
    let password = document.getElementById("pass");
    let confirm_password = document.getElementById("confirm_pass");

    if (password.value !== confirm_password.value) {
        alert("Złe");
        return false;
    }
    return true;
}






