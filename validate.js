function validateForm(){

let name = document.getElementById("name").value.trim();
let email = document.getElementById("email").value.trim();
let age = document.getElementById("age").value.trim();

if(name == ""){
alert("Enter Name");
return false;
}

if(email == ""){
alert("Enter Email");
return false;
}

if(age == ""){
alert("Enter Age");
return false;
}

return true;

}