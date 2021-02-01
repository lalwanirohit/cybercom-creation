function validateForm() {

    var email = document.userform.email.value;
    var password = document.userform.password.value;

    if(email == "") {
        document.getElementById("errors").innerHTML = '<li>please enter Email</li>';
        return false;
    }   

    if(password == "" || password.length < 6 ) {
        document.getElementById("errors").innerHTML = '<li>please enter password.</li><li>password should be minimum 6 characters long</li>';
        return false;
    }

    return true;
}