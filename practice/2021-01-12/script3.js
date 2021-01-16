console.log('... welcome to script 3 ...');

//hoisting 

// functions 

calculateAge(1999);  // because it is an function. in hoisting it is pointing to the function 

function calculateAge(year) {
    var age = 2021 - year;
    console.log('you are ' + age + ' years old at present');
}

//call function
calculateAge(1999);

// calculation(1999);  generates error because it is an variable so that's why it is pointing to variable and set to undefined at that moment

var calculation = function(year) {
    var retirement = 65 - ( 2021 - year );
    console.log('there are still ' + retirement + ' years left to your retirement');
}

calculation(1999);  // run correctly because now this is pointing to variable and it is executed


// variables 

console.log(a); // it is undefined because at this time it is pointing to variable which is still undefined

var a = 45;
console.log(a); 

function display() {
    var a = 100;
    console.log(a);  // print 100 because it is in function display's execution context
}
display();// print 100 because it is in function display's execution context

console.log(a); // print 45 because it is in global execution context.


