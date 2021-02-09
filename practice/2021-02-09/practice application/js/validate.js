$(document).ready(function(){

    $('#addcontact').validate({
        rules : {
            fullname : {
                required:true,
                //minlength:4,
            },
            email : {
                required:true,
                email:true,
            },
            password : {
                required:true,
            },
            password2 : {
                required:true,
                equalTo:"#password", 
            },
            'gender[]' : {
                required:true,
            },
            'maritalstatus[]' : {
                required:true,
            },
            address : {
                required:true,
            },
            dob : {
                required:true,
            },
            'game[]' : {
                required:true,
            },
            photo : {
                required:true,
                accept: "image/jpeg, image/png",
                filesize:1048576,
            },
            'terms[]' : {
                required:true,
            },
        },
        messages : {
            firstname:{
                required:"please enter first name",
            },
        }
    });
});