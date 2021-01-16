//execution context and execution stack
var userName = 'john'; // global execution context
function first() {
    var b = 'hello'; 
    second(); // this will create a new seperate execution context for second() function
    console.log(b + userName);
}
function second() { 
    var c = 'hi'; 
    third(); // this will create a new seperate execution context for third() function
    console.log(c + userName) ;
}
function third() {
    var d = 'heyy';
    console.log(d + userName);
}
first(); // this will create a new seperate execution context for first() function

/* execution stack : 

1) on the top : third()'s execution context
2) on the second place from top : second()'s execution context
3) on the third place from top : first()'s execution context
4) on the last place from top there will be global execution context

*/