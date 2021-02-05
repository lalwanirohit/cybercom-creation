// add value to age select input
for (var i = 15; i < 50; i++) {
    var x = document.getElementById("age");
    var option = document.createElement("option");
    option.text = i;
    x.add(option);
}

// function to validate all the fields
function validateForm() {

    // elements values
    const username = document.userform.name.value;
    const password = document.userform.password.value;
    const address = document.userform.address.value;
    const gender = document.userform.gender.value;
    const age = document.userform.age.value;
    const photo = document.userform.photo.value;

    var flag = 0;
        for (var i = 0; i < 5; i++) {
            if (document.userform['games[]'][i].checked) {
                console.log(flag);
                flag++;
            }
        }

    if(username == "" || password == "" || address == "" || gender == "" || age == "" || age == "Age" || photo == "" || flag == 0) {
        // validate username
        if (username == "") {
            document.getElementById("name_err").innerHTML = "<small>* Please enter username</small>";
        }
        else {
            document.getElementById("name_err").style.visibility = "hidden";
        }

        // validate password
        if (password == "") {
            document.getElementById("password_err").innerHTML = "<small>* Please enter password</small>";
        }
        else {
            document.getElementById("password_err").style.visibility = "hidden";
        }

        // validate address
        if (address == "") {
            document.getElementById("address_err").innerHTML = "<small>* Please enter address</small>";
        }
        else {
            document.getElementById("address_err").style.visibility = "hidden";
        }

        // validate games
        if (flag == 0) {
            document.getElementById("game_err").innerHTML = "<small>* Please select game</small>";
        }
        else {
            document.getElementById("game_err").style.visibility = "hidden";
        }

        // validate gender
        if (gender == "") {
            document.getElementById("gender_err").innerHTML = "<small>* Please select gender</small>";
        }
        else {
            document.getElementById("gender_err").style.visibility = "hidden";
        }

        // validate age
        if (age == "" || age == "Age") {
            document.getElementById("age_err").innerHTML = "<small>* Please select age</small>";
        }
        else {
            document.getElementById("age_err").style.visibility = "hidden";
        }

        // validate photo
        if (photo == "") {
            document.getElementById("photo_err").innerHTML = "<small>* Please select photo</small>";
        }
        else {
            document.getElementById("photo_err").style.visibility = "hidden";
        }
        return false;
    }
    else {
        return true;
    }
}