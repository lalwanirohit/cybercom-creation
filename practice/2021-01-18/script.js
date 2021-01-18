//////////////////////////////////////////////////////////
//// Arrow Function
//////////////////////////////////////////////////////////

const years = [1990,1985,1960,1945,1937];

//ES5
var ages5 = years.map(function (element){
    return 2021 - element;
});
console.log(ages5);

//ES6
let ages6 = years.map(element => 2021 - element);
console.log(ages6);

ages6 = years.map((element , index) => `age element ${index + 1} : ${2021-element}.`);
console.log(ages6);

const persons = [{studentName:'Rohit', birthyear: 1999} ,
{studentName: 'Sumant' , birthyear: 1998} ,
{studentName: 'Mayur' , birthyear: 1997} ,
{studentName: 'Ankit' , birthyear: 1996}];

ages6 = persons.map(element => `${element.studentName} is ${2021-element.birthyear} years old.`);
console.log(ages6);

//------------------------------------------------------------------------------------------------------

// //ES5
var box5 = {
    color: 'green',
    position: 1,
    clickMe: function() {
        var self = this;
        document.querySelector('.green').addEventListener('click', function() {
            var str = 'this is box number ' + self.position + ' and it is ' + self.color;
            alert(str);
        });
    }
}
//box5.clickMe();

// //ES6 lexical this keyword
var box6 = {
    color: 'green',
    position: 1,
    clickMe: function() {
        document.querySelector('.green').addEventListener('click', () => {
            var str = 'this is box number ' + this.position + ' and it is ' + this.color;
            alert(str);
        });
    }
}
box6.clickMe();

//------------------------------------------------------------------------------------------------------

function Person(name) {
    this.name = name;
}

//ES5
Person.prototype.myFriends5 = function(friends) {
    var arr = friends.map(function(element) {
        return this.name + ' is friends with ' + element;
    }.bind(this));
    console.log(arr);
}

var friends = ['rohit','sumant','ankit'];
new Person('mayur').myFriends5(friends);

//ES6 lexical this keyword
Person.prototype.myFriends6 = function(friends) {
    let arr = friends.map(element => `${this.name} has friendship with ${element}`);
    console.log(arr);
}

friends = ['sumant','ankit','mayur'];
new Person('rohit').myFriends6(friends);

/////////////////////////////////////////////////////////////
////// Destructuring
/////////////////////////////////////////////////////////////

//ES5 
var bats = ['Ceat','MRF','SG'];
var rohit_sharma = bats[0];
var virat_kohli = bats[1];
var cheteshwar_pujara = bats[2];


//ES6 destructuring

// struct the data
let mike  = ['mike', 26 , 'designer'];

// destructure array
const [firstName , age , job] = mike;
console.log(firstName);
console.log(age);
console.log(job);


// destructure object
const marnus = {
    fName: 'marnus' ,
    lName: 'marcus'
};

const { fName , lName } = marnus
console.log(fName , lName);
    
const { fName: a , lName: b} = marnus;
console.log(a , b);


function calcAgeRetirement(year) {
    const age = new Date().getFullYear() - year;
    return [age , 65-age]; // returning more than one value
}

const [age2 , retirementAge] = calcAgeRetirement(1999);
console.log(age2);
console.log(retirementAge);


/////////////////////////////////////////////////////////////////////
/////// Arrays in ES6 / ES2015
/////////////////////////////////////////////////////////////////////

// get all the classes which will contain box 
let boxes = document.querySelectorAll('.box');

//ES5
/*
var boxesArr5 = Array.prototype.slice.call(boxes);
console.log(boxesArr5);
boxesArr5.forEach(function(element) {
    element.style.backgroundColor = 'dodgerblue';
});
*/

//ES6
const boxesArr6 = Array.from(boxes);
boxesArr6.forEach(element => element.style.backgroundColor = 'orange');

// cahnge the text content of boxes and skip box which has class box blue
// for(var i=0 ; i<boxesArr6.length ; i++) {
//     if(boxesArr6[i].className === 'box blue') {
//         continue;
//     }
//     boxesArr6[i].textContent = 'I changed to Blue';
// }


for(const currentElement of boxesArr6) {
    if(currentElement.className === "box blue") {
        continue;
    }
    console.log(currentElement);
    currentElement.textContent = 'I changed to orange';
}

//--------------------------------------

ages2 = [16, 16, 21, 16, 10];
console.log(ages2.findIndex(element => element >= 18));
console.log(ages2.find(element => element >= 18));


