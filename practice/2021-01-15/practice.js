/////////////////////////////////////////////
// objects & constructors

// function constructor
var Person = function(name , yearOfBirth , job) {
    this.name = name;
    this.yearOfBirth = yearOfBirth;
    this.job = job;
}

// put calculateAge() in Person class' prototype so that all the objects can inherit it
Person.prototype.calculateAge = function() {
    console.log( 2021 - this.yearOfBirth );
}
Person.prototype.country = 'India';

// create a object of Person
var john = new Person('john',1995,'Designer');

// create another object
var rohit = new Person('rohit',1999,'Software Developer');

john.calculateAge();
rohit.calculateAge();

console.log(john.country); // country property is not in constructor but it is in prototype.
console.log(rohit.country);

//----------------------------------------------------------------------------------------------

// object cinstructor
var Player = function(name,odiRuns,t20Runs,testRuns,odiWickets,t20Wickets,testWickets) {
    this.name = name;
    this.odiRuns = odiRuns;
    this.t20Runs = t20Runs;
    this.testRuns = testRuns;
    this.odiWickets = odiWickets;
    this.t20Wickets = t20Wickets;
    this.testWickets = testWickets;
}

Player.prototype.totalRuns = function(){
    var totalruns = this.odiRuns + this.t20Runs + this.testRuns;
    console.log(this.name + "'s total runs are :" + totalruns);
}
Player.prototype.totalWickets = function() {
    var totalwickets =  this.odiWickets + this.t20Wickets + this.testWickets;
    console.log(this.name + "'s total runs are :" + totalwickets);
}

// object
var rohitSharma = new Player('Rohit Sharma',9115,2773,2219,8,1,2);

// object
var viratKohli = new Player('Virat Kohli',12040,2928,7318,4,4,0);

rohitSharma.totalRuns();
rohitSharma.totalWickets();

viratKohli.totalRuns();
viratKohli.totalWickets();

//--------------------------------------------------------------------------------------------

//create object through Object.create()

var personProto = {
    calculateAge : function () {
        console.log(2021 - this.yearOfBirth);
    }
};

// create object 
var mary = Object.create(personProto);
mary.name = 'mary';
mary.job = 'Software Developer';
mary.yearOfBirth = 1986;

// create object second way
var kavya = Object.create(personProto, {
    job: {value: 'designer'},
    yearOfBirth: {value: 1979}
});

//-------------------------------------------------------------------------------------------

//primitives vs. Objects

//primitive
var a = 45;
var b = a;
a = 50;

console.log(a);
console.log(b);


//object
var obj1 = {
    age : 45,
}

var obj2 = obj1;
obj1.age = 50;

console.log(obj1.age);
console.log(obj2.age);


//function
var age = 27;
var obj = {
    name : 'rahul',
    city : 'jamnagar'
};

function change(a,b) {
    a = 30;
    b.city = "junagadh";
}

change(age , obj);

console.log(age);
console.log(obj.city);

//-------------------------------------------------------------------------------------------

// first class functions : passing function as a argument t another function

var years = [1990 , 1957 , 1965 , 1988];

function arrayCalc(arr , fn) {
    var arrRes = [];
    for(var i=0 ; i<arr.length ; i++) {
        arrRes.push(fn(arr[i]))
    }
    return arrRes;
}

function calculateAge(el) {
    return 2021 - el;
}

var ages = arrayCalc(years , calculateAge);
console.log(ages);
