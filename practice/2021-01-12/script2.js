console.log("... welcome to script 2 ...");

// localStorage

// store date in localStorage
localStorage.setItem('firstName','Rohit'); // using orthodox way
localStorage.middleName = 'Prakashbhai'; // using object-like manner
localStorage.lastName = 'Lalwani';

// access or get the data from localStorage
console.log(localStorage.getItem('firstName'))  ; //using orthodox way
console.log(localStorage.middleName);// using object-like manner
console.log(localStorage.lastName);

// access specific key
console.log(localStorage.key(1));

// use length property
console.log(localStorage.length);

// remove value 
localStorage.removeItem('lastName');  // orthodox way
delete localStorage.firstName;  // object like manner

// clear whole localStorage
localStorage.clear();



// sessionStorage

sessionStorage.setItem('firstName','Rohit'); // using orthodox way
sessionStorage.middleName = 'Prakashbhai'; // using object-like manner
sessionStorage.lastName = 'Lalwani';

// access or get the data from sessionStorage
console.log(sessionStorage.getItem('firstName'))  ; //using orthodox way
console.log(sessionStorage.middleName);// using object-like manner
console.log(sessionStorage.lastName);

// access specific key
console.log(sessionStorage.key(1));

// use length property
console.log(sessionStorage.length);

// remove value 
sessionStorage.removeItem('lastName');  // orthodox way
delete sessionStorage.firstName;  // object like manner

// clear whole sessionStorage
sessionStorage.clear();



