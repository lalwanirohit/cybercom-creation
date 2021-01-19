// fill month as options
let months = [];
for(let i=1; i<13; i++) {
    months.push(i);
}

let monthSelect = document.getElementById("month");
for (month in months) {
    monthSelect.options[monthSelect.options.length] = new Option(months[month] , month);
}

// fill dates as options
let dates = [];
for(let i=1; i<32; i++) {
    dates.push(i);
}
let dateSelect = document.getElementById("date");
for (date in dates) {
    dateSelect.options[dateSelect.options.length] = new Option(dates[date] , date);
}

// fill years as option
let years = [];
for (let i=1970 ; i<2020 ;i++) {
    years.push(i);
}
let yearSelect = document.getElementById("year");
for (year in years) {
    yearSelect.options[yearSelect.options.length] = new Option(years[year] , year);
}

// check email and re-type email are same or not ?
let checkEmail = function () {
    var mail = document.getElementById("email").value;
    console.log(mail);
    var remail = document.getElementById("reemail").value
    console.log(remail)
    if(mail === remail) {
        document.getElementById("reemail").style.backgroundColor="white";
    }
    else if (mail !== remail){
        document.getElementById("reemail").style.backgroundColor="yellow";
        return false;
    }
}

// check password
let checkPass = function () {
    var pass = document.getElementById("password").value;
    if(pass.length < 8) {
        document.getElementById("password").style.backgroundColor="red";
    }
    else {
        document.getElementById("password").style.backgroundColor="white";
    }
};


let checkRePass = function () {
    var pass = document.getElementById("password").value;
    var repass = document.getElementById("repass").value;
    if(pass === repass) {
        document.getElementById("repass").style.backgroundColor="white";
    }
    else if(pass !== repass) {
        document.getElementById("repass").style.backgroundColor="yellow";
    }
}

