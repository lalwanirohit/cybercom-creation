function validateForm() {

    var name_element = document.userform.name;
    var email_element = document.userform.email;
    var subject_element = document.userform.subject;
    var message_element = document.userform.message;

    var name = document.userform.name.value;
    var email = document.userform.email.value;
    var subject = document.userform.subject.value;
    var msg = document.userform.message.value;

    if (name == "") {
        name_element.style.border = "1px solid red";
        name_element.focus();
        document.getElementById("name_err").innerHTML = "<small>Please enter name</small>";
        return false;
    }
    else {
        document.getElementById("name_err").style.visibility = "hidden";
    }

    if (email == "") {
        email_element.style.border = "1px solid red";
        email_element.focus();
        document.getElementById("email_err").innerHTML = "<small>Please enter email</small>";
        return false;
    }
    else {
        document.getElementById("email_err").style.visibility = "hidden";
    }

    if (subject == "") {
        subject_element.style.border = "1px solid red";
        subject_element.focus();
        document.getElementById("subject_err").innerHTML = "<small>Please enter subject</small>";
        return false;
    }
    else {
        document.getElementById("subject_err").style.visibility = "hidden";
    }

    if (msg == "") {
        message_element.style.border = "1px solid red";
        message_element.focus();
        document.getElementById("message_err").innerHTML = "<small>Please enter you message</small>";
        return false;
    }
    else {
        document.getElementById("message_err").style.visibility = "hidden";
    }

    return true;
}