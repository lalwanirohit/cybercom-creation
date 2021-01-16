console.log('... welcome to script 4 ...');

//variable having global scope. global scoped variable can be used anywhere.
var firstName = 'rohit';
display();

//each new function creates a function scoping. variable defined inside function can be only used inside function.
function display() {
    var middleName = ' prakashbhai'; // variable having function scope. this variable can be used only in this function and in inner function.

    /* lexical scoping. when a function defined inside another function at that time time it creaates lexical scoping. it means that the function
    it's own variable. as well as we can use outer function's variable also in this function.  */
    inner();
    function inner() {
        var lastName = ' lalwani';
        console.log(firstName + middleName + lastName);
    }
}

