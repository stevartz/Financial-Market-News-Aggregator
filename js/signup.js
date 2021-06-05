//Check username validity. A username cannot be shorter than 5 characters and cannot contain spaces

let username_form = document.getElementById("username");
let password_form = document.getElementById("password");
let confirm_form = document.getElementById("confirm_password");
let toggle_password_checkbox = document.getElementById("toggle_password");


function checkUsername(){
    let no_spaces = username_form.value.includes(" ");
    let validUsername = username_form.value.length >5 && username_form.value.length >1 && !no_spaces;

    if(!validUsername){
        document.getElementById("username_warning").innerHTML="Username must not contain any spaces, and must be greater than 5 characters long!";
        
    }
    else if (validUsername){
        document.getElementById("username_warning").innerHTML="";
    }
}

function checkPassword(){
    let no_spaces = password_form.value.includes(" ");
    let validPassword = password_form.value.length >5 && password_form.value.length>1 && !no_spaces;

    if(!validPassword){
        document.getElementById("password_warning").innerHTML="Password must not contain any spaces, and must be greater than 5 characters long";

    }
    else if (validPassword){
        document.getElementById("password_warning").innerHTML="";
    }
}

function togglePassword(){
    if(password_form.type === "password"){
        //Switch to plain text
        password_form.type = "text";
    }
    else {
        password_form.type = "password";
    }
}

function validInput(s){
    if(s.length< 5 || s.includes(" ")){
        return false;
    }
    return true;
}

username_form.addEventListener('input', checkUsername);
password_form.addEventListener('input', checkPassword);
toggle_password_checkbox.addEventListener('click',togglePassword);

let submit_button = document.getElementById("submit_btn");
submit_button.addEventListener('click',(event) => { 
    //Change inner HTML
    if(confirm_form.value!=password_form.value){
        document.getElementById("confirm_warning").innerHTML = "Passwords are not matching";
        event.preventDefault();

    }
    if(!validInput(username_form.value) || !validInput(password_form.value)){
        event.preventDefault();
    }
});

