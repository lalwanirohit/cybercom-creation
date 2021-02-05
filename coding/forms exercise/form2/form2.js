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

function validateForm() {

    var fname = document.userform.fname.value;
    var password = document.userform.password.value;
    var gender = document.userform.gender.value;
    var address = document.userform.address.value;
    var month = document.userform.month.value;
    var date = document.userform.date.value;
    var year = document.userform.year.value;
    var marital_status = document.userform.status.value;

    var flag = 0;
        for (var i = 0; i < 4; i++) {
            if (document.userform['games[]'][i].checked) {
                console.log(flag);
                flag++;
            }
        }

    if(fname == "" || password == "" || password.length < 6 || gender == "" || address == "" || month == "" || month == "Month"
    || date == "" || date == "Date" || year == "" || year == "Year" || flag == 0 || marital_status == "" || !document.userform.terms.checked) 
    {
        if (fname == "") {
            document.getElementById("fname_err").innerHTML = "<small>* Please enter first name</small>";
        } else { document.getElementById("fname_err").style.visibility = "hidden"; }
        
        if (password == "" || password.length < 6) {
            document.getElementById("password_err").innerHTML = "<small>* Please enter password</small>";
        } else { document.getElementById("password_err").style.visibility = "hidden"; }
        
        if (gender == "") {
            document.getElementById("gender_err").innerHTML = "<small>* Please select gender</small>";
        } else { document.getElementById("gender_err").style.visibility = "hidden"; }

        if (address == "") {
            document.getElementById("address_err").innerHTML = "<small>* Please enter address</small>";
        } else { document.getElementById("address_err").style.visibility = "hidden"; }
    
        if (month == "" || month == "Month" || date == "" || date == "Date" || year == "" || year == "Year") {
            document.getElementById("dob_err").innerHTML = "<small>* Please select month , date and age</small>";
        } else { document.getElementById("dob_err").style.visibility = "hidden"; }
        
        if (flag == 0) {
            document.getElementById("game_err").innerHTML = "<small>* Please select game</small>";
        } else { document.getElementById("game_err").style.visibility = "hidden"; }
        
        if (marital_status == "") {
            document.getElementById("mstatus_err").innerHTML = "<small>* Please select marital status</small>";
        } else { document.getElementById("mstatus_err").style.visibility = "hidden"; }

        if (!document.userform.terms.checked) {
            document.getElementById("terms_err").innerHTML = "<small>* Please accept the agreement</small>";
        } else { document.getElementById("terms_err").style.visibility = "hidden"; }
        return false;
    }
    else {
        return true;
    } 
}