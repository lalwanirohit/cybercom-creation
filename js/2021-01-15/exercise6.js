/* using simple for loop */

//get number of terms to print fibonacci
var number = parseInt(prompt("please enter how many term of fibonacci series you want to print"));

//set two variables to 0 and 1
var first=0 , second = 1 , third;

// create array to store all the terms of fibonacci series
var series = [first , second];

// for loop to print series
for(var i=1 ; i<=number-2 ; i++) {
    third = first + second;
    first = second;
    second = third;
    series.push(third);
}

// print array
console.log(series);
