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

// let employees = [];
// const addEmployee = (ev) => {
//     //ev.preventDefault();
//     let employee = {
//         id:Date.now(),
//         ename : document.getElementById("name").value ,
//         email : document.getElementById("email").value ,
//         dob : document.getElementById("dob").value
//     }

//     emps = JSON.parse(localStorage.getItem("employeeList") || "[]");
//     emps.forEach(function(emp) {
//         employees.push(emp);
//     })
//     employees.push(employee);
//     document.forms[0].reset();

//     localStorage.setItem('employeeList' , JSON.stringify(employees));    
    
// } 
// document.getElementById("btn").addEventListener("click" , addEmployee);

//     emps = JSON.parse(localStorage.getItem("employeeList") || "[]");
    
//     var table = document.getElementById("records"); 
//     emps.forEach(function(emp) {
//     var row = table.insertRow(0);
//     var cell1 = row.insertCell(0);
//     var cell2 = row.insertCell(1);
//     var cell3 = row.insertCell(2);
//     var cell4 = row.insertCell(3);
//     for(let i=0 ; i<4 ; i++) {
//         cell1.innerHTML = `${emp['id']}`;
//         cell2.innerHTML = `${emp['ename']}`;
//         cell3.innerHTML = `${emp['email']}`;
//         cell4.innerHTML = `${emp['dob']}`;
//       }
// })


///////////////////////////////////////////////////////////////
/////// Display records from localstorage
///////////////////////////////////////////////////////////////

function reset(){
window.location = "practice.html";
document.getElementById("name").value="";
document.getElementById("email").value="";
document.getElementById("dob").value="";

} 



