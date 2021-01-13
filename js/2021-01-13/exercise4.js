//object of john
var john = {
    fullName : 'john smith',
    mass : 75, //in kg
    height : 1.9812 ,  // in meter 
    calculateBmi : function () {
        return this.mass / (this.height * this.height);
    }
}

// object of mark
var mark = new Object();
mark.fullName = 'mark johnson';
mark.mass = 70 ; // in kg
mark.height = 1.92024 ; //in meter
mark.calculateBmi = function() {
    return this.mass / (this.height * this.height);
}

// condition to find who has higher BMI
if(mark.calculateBmi() > john.calculateBmi()) {
    console.log(mark.fullName + ' : ' + mark.calculateBmi());
}
else if (mark.calculateBmi() < john.calculateBmi()) {
    console.log(john.fullName + ' : ' + john.calculateBmi());
}
else {
    console.log('both have the same BMI');
}