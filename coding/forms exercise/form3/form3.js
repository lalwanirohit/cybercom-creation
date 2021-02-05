months = ["jan","feb","mar","apr","may","jun","jul","aug","sep","oct","nov","dec"];

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

countries = ["India","Australia","Brazil","Canada","Denmark","France","Russian Federation","United States"];

for (var i = 0; i <= countries.length; i++) {
  var x = document.getElementById("country");
  var option = document.createElement("option");
  option.text = countries[i];
  x.add(option);
}

function validateForm() {
  // elements
  const fname = document.userform.fname.value;
  const lname = document.userform.lname.value;
  const date = document.userform.date.value;
  const month = document.userform.month.value;
  const year = document.userform.year.value;
  const gender = document.userform.gender.value;
  const email = document.userform.email.value;
  const phone = document.userform.phone.value;
  const password = document.userform.password.value;
  const confirm_password = document.userform.confirm_password.value;

  if (fname == "" || lname == "" || date == "" || date == "Date" || month == "" || month == "Month" ||
    year == "" || year == "Year" || gender == "" || email == "" || phone == "" || phone.length < 10 ||
    password == "" || password.length < 6 || confirm_password !== password || !document.userform.terms.checked ) {
    if (fname == "") {
      document.getElementById("fname_err").innerHTML =
        "<small>Please enter first name</small>";
    } else {
      document.getElementById("fname_err").style.visibility = "hidden";
    }

    if (lname == "") {
      document.getElementById("lname_err").innerHTML =
        "<small>Please enter last name</small>";
    } else {
      document.getElementById("lname_err").style.visibility = "hidden";
    }

    if (date == "" || date == "Date" || month == "" || month == "Month" || year == "" || year == "Year") {
      document.getElementById("dob_err").innerHTML =
        "<small>Please select month , date and age</small>";
    } else {
      document.getElementById("dob_err").style.visibility = "hidden";
    }

    if (gender == "") {
      document.getElementById("gender_err").innerHTML =
        "<small>Please select gender</small>";
    } else {
      document.getElementById("gender_err").style.visibility = "hidden";
    }

    if (email == "") {
      document.getElementById("email_err").innerHTML =
        "<small>Please enter email</small>";
    } else {
      document.getElementById("email_err").style.visibility = "hidden";
    }

    if (phone == "" || phone.length < 10) {
      document.getElementById("phone_err").innerHTML =
        "<small>Please enter phone number</small>";
    } else {
      document.getElementById("phone_err").style.visibility = "hidden";
    }

    if (password == "" || password.length < 6) {
      document.getElementById("password_err").innerHTML =
        "<small>Please enter password <br> it must be 6 characters long</small>";
    } else {
      document.getElementById("password_err").style.visibility = "hidden";
    }

    if (confirm_password !== password) {
      document.getElementById("cpassword_err").innerHTML =
        "<small>must be same as password</small>";
    } else {
      document.getElementById("cpassword_err").style.visibility = "hidden";
    }

    if (!document.userform.terms.checked) {
      document.getElementById("terms_err").innerHTML =
        "<small>Please agree the terms and conditions</small>";
    }
    return false;
  } else {
    return true;
  }
}