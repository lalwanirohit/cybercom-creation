//variable declareation
var markMass , markHeight , johnMass , johnHeight;

// mark details
markMass = 72;
markHeight = 6.3;

//john details
johnMass = 75;
johnHeight = 6.5;

//BMI calculations
var markBmi = markMass / (markHeight * markHeight);
var johnBmi = johnMass / (johnHeight * johnHeight);

//deciding higher BMI
var higherBmi = markBmi > johnBmi;
console.log("Is mark's BMI higher than john's ? " + higherBmi);