/////////////////////////////////////////////////////////////////
/////////// classes
/////////////////////////////////////////////////////////////////

//ES5
var Person5 = function(name, yearOfBirth, job) {
    this.name = name;
    this.yearOfBirth = yearOfBirth;
    this.job = job;
}

Person5.prototype.calculateAge = function() {
    var age = new Date().getFullYear() - this.yearOfBirth;
    console.log(age);
}

var smith5 = new Person5('smith', 1980, 'cricketer');


//ES6
class Person6 {
    constructor(name , yearOfBirth, job) {
        this.name = name;
        this.yearOfBirth = yearOfBirth;
        this.job = job;
    }

    calculateAge(){
        const age = new Date().getFullYear() - this.yearOfBirth;
        console.log(age);
    }
}

let pant6 = new Person6('pant', 1995, 'designer');
pant6.calculateAge();

/////////////////////////////////////////////////////////////


class car {
    constructor(name , year) {
        this.name = name;
        this.year = year;
    }

    calculateAge () {
        let date = new Date();
        return date.getFullYear() - this.year;
    }
}

let audi = new car('Audi A6', 2015);
console.log(audi.calculateAge());

//////////////////////////////////////////////////////////////

class Car {
    constructor(brand) {
        this.brand = brand;
    }
    present() {
        return `I have ${this.brand}`;
    }
} 

class Model extends Car {
    constructor(brand , model) {
        super(brand);
        this.model = model;
    }
    show() {
        return `${this.present()}, it is a ${this.model}`;
    }
}

let myCar = new Model('Audi' , 'A6');
console.log(myCar.show());
 

////////////////////////////////////////////////////////

class Person {
    constructor(fullName , yearOfBirth , job) {
        this.fullName = fullName;
        this.yearOfBirth = yearOfBirth;
        this.job = job;
    }

    calculateAge() {
        let currentYear = new Date().getFullYear();
        let age = currentYear - this.yearOfBirth;
        console.log(age); 
    }
}

class Athlete6 extends Person { 
    constructor(fullName , yearOfBirth , job , olympicGames , medals) {
        super(fullName , yearOfBirth , job);
        this.olympicGames = olympicGames;
        this.medals = medals;
    }

    wonMedal () {
        this.medals++;
        console.log(this.medals)
    }
}

let rohit = new Athlete6('rohit lalwani' , 1999 , 'cricketer' , 45 , 39);
rohit.calculateAge();
rohit.wonMedal();

///////////////////////////////////////////////////////////////////////

class Bike {
    constructor(company) {
        this.company = company;
    }
    static message () {
        console.log("hello");
    }
}

Bike.message();
let hero = new Bike('hero');
//hero.message(); // it will generate error.

/////////////////////////////////////////////////////////////////////////

class One {
    constructor() {
        console.log('Super class constructor');
    }
}

class Two extends One {
    constructor() {
        super ();
        console.log('Sub class constructor');
    }
}

let obj = new Two();

///////////////////////////////////////////////////////////////////////

class Three {
    constructor(std) {
        this.std = std;
    }

    get stdName() {
        console.log(this.std);
    }
    set stdName(x) {
        this.std = x;
    }
}
  
let obj1 = new Three(45);
obj1.stdName = 39;
obj1.stdName;