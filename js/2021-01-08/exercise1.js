//variable declareation
var markMass , markHeight , johnMass , johnHeight;

// mark details
markMass = 75; // in kg
markHeight = 1.9812; // in meter

//john details
johnMass = 70;
johnHeight = 1.92024;

//BMI calculations
var markBmi = markMass / (markHeight * markHeight);
var johnBmi = johnMass / (johnHeight * johnHeight);

//deciding higher BMI
var higherBmi = markBmi > johnBmi;
console.log("Is mark's BMI higher than john's ? " + higherBmi);