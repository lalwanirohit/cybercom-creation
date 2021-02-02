months = ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec'];
for (var i = 0; i <= 11; i++) {
    var x = document.getElementById("month");
    var option = document.createElement("option");
    option.text = months[i];
    x.add(option);
}

for (var i = 1; i < 32; i++) {
    var x = document.getElementById("date");
    var option = document.createElement("option");
    option.text = i;
    x.add(option);
}

for (var i = 1980; i < 2006; i++) {
    var x = document.getElementById("year");
    var option = document.createElement("option");
    option.text = i;
    x.add(option);
}

console.log("hello");

function validateForm() {

    const fname_element = document.userform.fname;
    const password_element = document.userform.password;
    const address_element = document.userform.address;
    var month_element = document.userform.month;
    var date_element = document.userform.date;
    var year_element = document.userform.year;

    var fname = document.userform.fname.value;
    var password = document.userform.password.value;
    var gender = document.userform.gender.value;
    var address = document.userform.address.value;
    var month = document.userform.month.value;
    var date = document.userform.date.value;
    var year = document.userform.year.value;
    var marital_status = document.userform.status.value;

    if (fname == "") {
        fname_element.style.border = "1px solid red";
        fname_element.focus();
        document.getElementById("fname_err").innerHTML = "<small>Please enter first name</small>";
        return false;
    }
    else {
        document.getElementById("fname_err").style.visibility = "hidden";
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

    if (gender == "") {
        document.getElementById("gender_err").innerHTML = "<small>Please select gender</small>";
        return false;
    }
    else {
        document.getElementById("gender_err").style.visibility = "hidden";
    }

    if (address == "") {
        address_element.style.border = "1px solid red";
        address_element.focus();
        document.getElementById("address_err").innerHTML = "<small>Please enter password</small>";
        return false;
    }
    else {
        document.getElementById("address_err").style.visibility = "hidden";
    }

    if (month == "" || month == "Month") {
        month_element.style.border = "1px solid red";
        month_element.focus();
        document.getElementById("dob_err").innerHTML = "<small>Please select month , date and age</small>";
        return false;
    }
    else {
        document.getElementById("dob_err").style.visibility = "hidden";
    }

    if (date == "" || date == "Date") {
        date_element.style.border = "1px solid red";
        date_element.focus();
        document.getElementById("dob_err").innerHTML = "<small>Please select month , date and age</small>";
        return false;
    }
    else {
        document.getElementById("dob_err").style.visibility = "hidden";
    }

    if (year == "" || year == "Year") {
        year_element.style.border = "1px solid red";
        year_element.focus();
        document.getElementById("dob_err").innerHTML = "<small>Please select month , date and age</small>";
        return false;
    }
    else {
        document.getElementById("dob_err").style.visibility = "hidden";
    }

    var flag = 0;
    for (var i = 0; i < 4; i++) {
        if (document.userform['games[]'][i].checked) {
            console.log(flag);
            flag++;
        }
    }

    if (flag == 0) {
        document.getElementById("game_err").innerHTML = "<small>Please select game</small>";
        return false;
    }
    else {
        document.getElementById("game_err").style.visibility = "hidden";
    }

    if (marital_status == "") {
        document.getElementById("mstatus_err").innerHTML = "<small>Please select marital status</small>";
        return false;
    }
    else {
        document.getElementById("mstatus_err").style.visibility = "hidden";
    }

    if (!document.userform.terms.checked) {
        document.getElementById("terms_err").innerHTML = "<small>Please select marital status</small>";
        return false;
    }

    return true;
}