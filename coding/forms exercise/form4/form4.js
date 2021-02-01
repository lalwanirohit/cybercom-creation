function validateForm() {

    var name = document.userform.name.value;
    var email = document.userform.email.value;
    var subject = document.userform.subject.value;
    var msg = document.userform.message.value;

    if(name == "") {
        document.getElementById("errors").innerHTML = '<li>please enter name</li>';
        return false;
    }

    if(email == "") {
        document.getElementById("errors").innerHTML = '<li>please enter Email</li>';
        return false;
    }

    if(subject == "" || phone.length < 10) {
        document.getElementById("errors").innerHTML = '<li>please enter subject</li>';
        return false;
    }

    if(msg == "") {
        document.getElementById("errors").innerHTML = '<li>please enter message</li>';
        return false;
    }

    return true;
}