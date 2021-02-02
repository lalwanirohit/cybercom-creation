function validateForm() {

    var email_element = document.userform.email;
    var password_element = document.userform.password;

    var email = document.userform.email.value;
    var password = document.userform.password.value;

    if (email == "") {
        email_element.style.border = "1px solid red";
        email_element.focus();
        document.getElementById("email_err").innerHTML = "<small>Please enter email</small>";
        return false;
    }
    else {
        document.getElementById("email_err").style.visibility = "hidden";
    }

    if (password == "" || password.length < 6) {
        password_element.style.border = "1px solid red";
        password_element.focus();
        document.getElementById("password_err").innerHTML = "<small>Please enter password</small>";
        return false;
    }
    else {
        document.getElementById("password_err").style.visibility = "hidden";
    }

    return true;
}