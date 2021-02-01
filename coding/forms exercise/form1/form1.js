for(var i = 15; i < 50; i++) {
    var x = document.getElementById("age");
    var option = document.createElement("option");
    option.text = i;
    x.add(option); 
}

function validateForm() {

    var username = document.userform.name.value;
    var password = document.userform.password.value;
    var address = document.userform.address.value;
    var gender = document.userform.gender.value;
    var age = document.userform.age.value;
    var photo = document.userform.photo.value;

    if(username == "") {
        document.getElementById("errors").innerHTML = '<li>please enter username</li>';
        return false;
    }

    if(password == "" || password.length < 6 ) {
        document.getElementById("errors").innerHTML = '<li>please enter password.</li><li>password should be minimum 6 characters long</li>';
        return false;
    }

    if(address == "") {
        document.getElementById("errors").innerHTML = '<li>please enter address</li>';
        return false;
    }

    var flag = 0;
    for(var i=0 ; i<5 ; i++) {
    if(document.userform['games[]'][i].checked) {
    console.log(flag);
    flag++;
        }
    }
    
    if(flag==0) {
        document.getElementById("errors").innerHTML = '<li>please select game</li>';
        return false;
    }

    if(gender == "") {
        document.getElementById("errors").innerHTML = '<li>please enter gender</li>';
        return false;
    }

    if(age == "" || age == "Age") {
        document.getElementById("errors").innerHTML = '<li>please enter age</li>';
        return false;
    }

    if(photo == "") {
        document.getElementById("errors").innerHTML = '<li>please provide a photo</li>';
        return false;
    }
    
    return true;
}