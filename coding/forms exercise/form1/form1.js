// add value to age select input
for (var i = 15; i < 50; i++) {
    var x = document.getElementById("age");
    var option = document.createElement("option");
    option.text = i;
    x.add(option);
}

// function to validate all the fields
function validateForm() {

    // elements
    const name_element = document.userform.name;
    const password_element = document.userform.password;
    const address_element = document.userform.address;
    const age_element = document.userform.age;
    const photo_element = document.userform.photo;

    // elements values
    const username = document.userform.name.value;
    const password = document.userform.password.value;
    const address = document.userform.address.value;
    const gender = document.userform.gender.value;
    const age = document.userform.age.value;
    const photo = document.userform.photo.value;

    // validate username
    if (username == "") {
        name_element.style.border = "1px solid red";
        name_element.focus();
        document.getElementById("name_err").innerHTML = "<small>Please enter username</small>";
        return false;
    }
    else {
        document.getElementById("name_err").style.visibility = "hidden";
    }

    // validate password
    if (password == "") {
        password_element.style.border = "1px solid red";
        password_element.focus();
        document.getElementById("password_err").innerHTML = "<small>Please enter password</small>";
        return false;
    }
    else {
        document.getElementById("password_err").style.visibility = "hidden";
    }

    // validate address
    if (address == "") {
        address_element.style.border = "1px solid red";
        address_element.focus();
        document.getElementById("address_err").innerHTML = "<small>Please enter password</small>";
        return false;
    }
    else {
        document.getElementById("address_err").style.visibility = "hidden";
    }

    // validate games
    var flag = 0;
    for (var i = 0; i < 5; i++) {
        if (document.userform['games[]'][i].checked) {
            console.log(flag);
            flag++;
        }
    }

    if (flag == 0) {
        document.getElementById("game_err").innerHTML = "<small>Please select gender</small>";
        return false;
    }
    else {
        document.getElementById("game_err").style.visibility = "hidden";
    }

    // validate gender
    if (gender == "") {
        document.getElementById("gender_err").innerHTML = "<small>Please select gender</small>";
        return false;
    }
    else {
        document.getElementById("gender_err").style.visibility = "hidden";
    }

    // validate age
    if (age == "" || age == "Age") {
        age_element.style.border = "1px solid red";
        age_element.focus();
        document.getElementById("age_err").innerHTML = "<small>Please select age</small>";
        return false;
    }
    else {
        document.getElementById("age_err").style.visibility = "hidden";
    }

    // validate photo
    if (photo == "") {
        photo_element.style.border = "1px solid red";
        photo_element.focus();
        document.getElementById("photo_err").innerHTML = "<small>Please select photo</small>";
        return false;
    }
    else {
        document.getElementById("photo_err").style.visibility = "hidden";
    }
    return true;
}