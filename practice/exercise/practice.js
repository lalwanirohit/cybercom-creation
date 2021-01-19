///////////////////////////////////////////////////
////////  Display all the properties of object
///////////////////////////////////////////////////

// create object
var smith = {
    firstName : 'smith',
    lastName : 'johnson',
    age : 32,
    country : 'austrelia'
};

// print or display all the properties of object
console.log(Object.keys(smith));


///////////////////////////////////////////////////
/////// Add multiple objects in array and store it in local storage.
///////    o Object contains the below properties,
///////    o Name, Age, Email, Telephone Number.
///////    o Display the multiple objects in table structure.
///////////////////////////////////////////////////

var objects = {
    obj1 : {
        Name : 'sumant',
        Age : 20,
        Email : 'sumant@gmail.com',
        Telephone : 9033631496
    },

    obj2 : {
        Name : 'ankit',
        Age : 22,
        Email : 'ankit@gmail.com',
        Telephone : 9963149690
    },

    obj3 : {
        Name : 'mayur',
        Age : 27,
        Email : 'mayur@gmail.com',
        Telephone : 8866121496
    },

    obj4 : {
        Name : 'naimish',
        Age : 30,
        Email : 'naimish@gmail.com',
        Telephone : 7625983241
    },

    obj5 : {
        Name : 'rohit',
        Age : 22,
        Email : 'rohit@gmail.com',
        Telephone : 8320247191
    }
};


var arrObjects = [];

for (obj in objects) {
    arrObjects.push(objects[obj]);
}

console.log(arrObjects);

localStorage.setItem("users", JSON.stringify(arrObjects));
//localStorage.clear();
users = JSON.parse(localStorage.getItem("users") || "[]");
console.log(users);


////////////////////////////////////////////////////////////
/////// program to sort an array of objects
////////////////////////////////////////////////////////////

//sort the array in ascending order based on age
arrObjects.sort((a,b) => {
    if ( a.Age < b.Age ){
        return -1;
    }
    if ( a.Age > b.Age ){
        return 1;
    }
    return 0;
});
console.log(arrObjects);


//////////////////////////////////////////////////////////////
/////// Create one html form that contain the below fields,
///////     o Name, Email, Date of birth.
///////     o On click of submit button, Store the data as object in one single array. (array will be same for all records)
///////     o Display the data in one table format another page that is, view.html
//////////////////////////////////////////////////////////////

// var employees = [];

// function store () {
//     var userName = document.getElementById("name").value;
//     employees.push(userName);
//     var userEmail = document.getElementById("email").value;
//     employees.push(userEmail);
//     var userDob = document.getElementById("dob").value;
//     employees.push(userDob);
//     localStorage.setItem("users", JSON.stringify(employee));
// }
// console.log(employees);
var employees = [];
var btn = document.getElementById("btn").addEventListener("click" , addEmployee);
function addEmployee() {
    employees.push(
        {
            empname: document.getElementById('name').value,
            empmail: document.getElementById('email').value,
            empdob: document.getElementById('dob').value
        }
    );
    localStorage.setItem("localemp" , JSON.stringify(employees));
}
