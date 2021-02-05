function validateForm() {

    var name = document.userform.name.value;
    var email = document.userform.email.value;
    var subject = document.userform.subject.value;
    var msg = document.userform.message.value;

    if( name == "" || email == "" || subject == "" || msg == "") {
        if (name = "") {
            document.getElementById("name_err").innerHTML = "<small>* Please enter name</small>";
        } else {
            document.getElementById("name_err").style.visibility = "hidden";
        }
    
        if (email == "") {
            document.getElementById("email_err").innerHTML = "<small>* Please enter email</small>";
        } else {
            document.getElementById("email_err").style.visibility = "hidden";
        }
    
        if (subject == "") {
            document.getElementById("subject_err").innerHTML = "<small>* Please enter subject</small>";
        } else {
            document.getElementById("subject_err").style.visibility = "hidden";
        }
    
        if (msg == "") {
            document.getElementById("message_err").innerHTML = "<small>* Please enter you message</small>";
        } else {
            document.getElementById("message_err").style.visibility = "hidden";
        }
        return false;
    }
    else {
        return true;
    }
}