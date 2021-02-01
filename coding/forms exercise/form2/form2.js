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


function validateForm() {

    var fname = document.userform.fname.value;
    var password = document.userform.password.value;
    var gender = document.userform.gender.value;
    var address = document.userform.address.value;
    var month = document.userform.month.value;
    var date = document.userform.date.value;
    var year = document.userform.year.value;
    var marital_status = document.userform.status.value;

    console.log(marital_status);

    if(fname == "") {
        document.getElementById("errors").innerHTML = '<li>please enter first name</li>';
        return false;
    }

    if(password == "" || password.length < 6 ) {
        document.getElementById("errors").innerHTML = '<li>please enter password.</li><li>password should be minimum 6 characters long</li>';
        return false;
    }

    if(gender == "") {
        document.getElementById("errors").innerHTML = '<li>please enter gender</li>';
        return false;
    }

    if(address == "") {
        document.getElementById("errors").innerHTML = '<li>please enter address</li>';
        return false;
    }

    if(month == "" || month == "Month") {
        document.getElementById("errors").innerHTML = '<li>please select month</li>';
        return false;
    }

    if(date == "" || date=="Date") {
        document.getElementById("errors").innerHTML = '<li>please select date</li>';
        return false;
    }

    if(year == "" || year == "Year") {
        document.getElementById("errors").innerHTML = '<li>please select year</li>';
        return false;
    }

    var flag = 0;
    for(var i=0 ; i<4 ; i++) {
        if(document.userform['games[]'][i].checked) {
            console.log(flag);
            flag++;
        }
    }
    
    if(flag==0) {
        document.getElementById("errors").innerHTML = '<li>please select game</li>';
        return false;
    }

    if(marital_status == "") {
        document.getElementById("errors").innerHTML = '<li>please select marital status</li>';
        return false;
    }

    if(!document.userform.terms.checked) {
        document.getElementById("errors").innerHTML = '<li>please accept the agreement</li>';
        return false;
    }

    return true;
}