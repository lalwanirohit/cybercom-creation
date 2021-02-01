months = ['jan' , 'feb' , 'mar' , 'apr' , 'may' , 'jun' , 'jul' , 'aug' , 'sep' , 'oct' , 'nov' ,'dec'];
for(var i=0; i<=11; i++) {
    var x = document.getElementById("month");
    var option = document.createElement("option");
    option.text = months[i];
    x.add(option); 
}

for(var i = 1; i < 32; i++) {
    var x = document.getElementById("date");
    var option = document.createElement("option");
    option.text = i;
    x.add(option); 
}

for(var i = 1980; i<2006 ; i++) {
    var x = document.getElementById("year");
    var option = document.createElement("option");
    option.text = i;
    x.add(option); 
}

countries = ['India' , 'Australia' , 'Brazil' ,'Canada' ,'Denmark' ,'France','Russian Federation' ,'United States'];
for(var i=0; i<=countries.length; i++) {
    var x = document.getElementById("country");
    var option = document.createElement("option");
    option.text = countries[i];
    x.add(option); 
}

function validateForm() {

    var fname = document.userform.fname.value;
    var lname = document.userform.lname.value;
    var date = document.userform.date.value;
    var month = document.userform.month.value;
    var year = document.userform.year.value;
    var gender = document.userform.gender.value;
    var country = document.userform.country.value;
    var email = document.userform.email.value;
    var phone = document.userform.phone.value;
    var password = document.userform.password.value;
    var confirm_password = document.userform.confirm_password.value;

    if(fname == "") {
        document.getElementById("errors").innerHTML = '<li>please enter first name</li>';
        return false;
    }

    if(lname == "") {
        document.getElementById("errors").innerHTML = '<li>please enter last name</li>';
        return false;
    }

    if(date == "" || date == "Date") {
        document.getElementById("errors").innerHTML = '<li>please select date</li>';
        return false;
    }

    if(month == "" || month == "Month") {
        document.getElementById("errors").innerHTML = '<li>please select month</li>';
        return false;
    }

    if(year == "" || year == "Year") {
        document.getElementById("errors").innerHTML = '<li>please select year</li>';
        return false;
    }

    if(gender == "") {
        document.getElementById("errors").innerHTML = '<li>please select gender</li>';
        return false;
    }

    if(country == "" || country == "Country") {
        document.getElementById("errors").innerHTML = '<li>please select country</li>';
        return false;
    }

    if(email == "") {
        document.getElementById("errors").innerHTML = '<li>please enter Email</li>';
        return false;
    }

    if(phone == "" || phone.length < 10) {
        document.getElementById("errors").innerHTML = '<li>please enter phone</li><li>phone number should be of 10 digits</li>';
        return false;
    }

    if(password == "" || password.length < 6 ) {
        document.getElementById("errors").innerHTML = '<li>please enter password.</li><li>password should be minimum 6 characters long</li>';
        return false;
    }

    if(confirm_password == "" || password !== confirm_password ) {
        document.getElementById("errors").innerHTML = '<li>please confirm password.</li><li>password and confirm password must be same</li>';
        return false;
    }

    if(!document.userform.terms.checked) {
        document.getElementById("errors").innerHTML = '<li>please accept the agreement</li>';
        return false;
    }

    return true;
}