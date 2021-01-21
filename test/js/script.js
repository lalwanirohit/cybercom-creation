// add userList array of objects in localstorage
document.getElementById("adduser").addEventListener("click", function() {
    let users = [];
        var now = new Date().getFullYear();
        var ext = document.getElementById("udob").value;
        var d = new Date(ext);
        if ( !!d.valueOf() ) {
        var y = d.getFullYear();
        var year = now - y;
        }
        let user = {
            name : document.getElementById("uname").value,
            email : document.getElementById("umail").value,
            password : document.getElementById("upass").value,
            dob : document.getElementById("udob").value,
            age : year
        }

        users2 = JSON.parse(localStorage.getItem("userList") || "[]");
        users2.forEach(function (u) {
            users.push(u);
        })
        users.push(user);

        localStorage.setItem('userList', JSON.stringify(users));
        location.href="subuser.html";
    });

