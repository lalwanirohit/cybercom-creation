// return function

// a generic function
function interviewQuestion (job) {
    if(job === "teacher") {
        //return a function
        return function (name) {
            console.log (name + " , can you explain what is the formula of counting BMI ?");
        }
    }
    else if (job === "designer") {
        return function (name) {
            console.log(name + " , can you please explain what is figma tool ?");
        }
    }
    else {
        return function (name) {
            console.log("what do you do " + name + " ?");
        }
    }
}

// stored function in a variable
var teacherQuestion = interviewQuestion('teacher');
teacherQuestion('Sumant'); // call the function through variable and passed the return function's parameter.

var designerQuestion = interviewQuestion('designer');
designerQuestion('Naimish');

var generalQuestion = interviewQuestion('cricketer');
generalQuestion('warner');

// we also can do this 
interviewQuestion('teacher')('Ankit');


//-----------------------------------------------------------------------------------------------------------

// IIFE 
(function () {
    score = Math.random() * 10;
    if(score >= 5) {
        console.log("you won");
    }
    else {
        console.log("you loss");
    }
}) ();

//----------------------------------------------------------------------------------------------------------
//IIFE function
(function () {
    var total=0;
    for(var i=0 ; i<3 ; i++) {
        var dice= Math.floor((Math.random()*6) + 1);
        total += dice;
    }
    if(total > 10) {
        console.log("Congratulations, you have won the game");
    }
    else {
        console.log("sorry, better luck next time");
    }
})();

//----------------------------------------------------------------------------------------------------------

//simple object
var sanket = {
    name: 'sanket',
    age: 17,
    job: 'student',
    presentation : function(style , timeOfDay) {
        if(style='formal') {
            console.log('good ' + timeOfDay + ', ladies and gentlemen. i\'m ' +this.name + '. i\'m a ' + this.job + '. i\'m '+ this.age + ' years old.');
        }
        else if(style='friendly') {
            console.log('hey what\'s  up ? good ' + timeOfDay + '. i\'m ' +this.name + '. i\'m a ' + this.job + '. i\'m '+ this.age + ' years old.');
        }
    }
};

sanket.presentation('formal','morning');

//another object
var rohit = {
    name: 'rohit',
    age: 22,
    job: 'software engineer'
};

//used call method 
sanket.presentation.call(rohit,'friendly','evening');

//used apply method
//sanket.presentation.apply(rohit,['friendly','evening']);

//used bind method
sanket.presentFriendly = sanket.presentation.bind(sanket,'friendly');
sanket.presentFriendly('evening');

//----------------------------------------------------------------------------------------

//closure
function retirement (retirementAge) {
    var a = ' years left until retirement.';
    return function (yearOfBirth) {
        var age = 2021 - yearOfBirth;
        console.log((retirementAge - age) + a);
    }
}

// call function 
retirement(60)(1999);

// also can be called like ,
var retirementIndia = retirement(60);
retirementIndia(1999);

//----------------------------------------------------------------------------------------

let a = 25;
console.log(a);
a = 45;
console.log(a);

const b = 45;
console.log(b);
//b = 25;
//console.log(b);

{
    let number = 101;
}
//console.log(number);


console.log(firstName);
var firstName="justin";

// console.log(lastName);
// let lastName="biber";

let i = 45;
for ( let i=1 ; i<=5 ; i++) {
    console.log(i);
}
console.log(i);

// ES5
(function () {
    var val=1;
})();
//console.log(val);


//ES6
{
    let val2 = 15;
}
//console.log(val2);

// template literal in ES6
let country = 'India';
let state = 'Gujarat';
let city = 'junagadh';

console.log(`i am rohit. i am from ${city} city. ${city} is in ${state} state. ${state} is in ${country}.`);

// string methods
const n = "Rohit Lalwani";
console.log(n.startsWith('R')); // checks the string start with R or not ?
console.log(n.endsWith('ni')); // checks string ends with ni or not ? 
console.log(n.includes('hi')); // checks string include or string has hi or not ?
console.log(`${n} `.repeat(5)); // repeat the string 5 times

