function validateForm() {

    var email_element = document.userform.email;
    var password_element = document.userform.password;

    var email = document.userform.email.value;
    var password = document.userform.password.value;

    if(email == "" || password == "" || password.length < 6) {
        if (email == "") {
            document.getElementById("email_err").innerHTML = "<small>* Please enter email</small>";
        } else {
            document.getElementById("email_err").style.visibility = "hidden";
        }
    
        if (password == "" || password.length < 6) {
            document.getElementById("password_err").innerHTML = "<small>* Please enter password</small>";
        } else {
            document.getElementById("password_err").style.visibility = "hidden";
        }
        return false;
    }
    else {
        return true;
    }
}