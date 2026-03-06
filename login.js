function validateForm(){
let username = document.getElementById("user_name").value.trim();
let password = document.getElementById("password").value.trim();

if(username.length == 0){
    alert("Enter Username");
    return false;
}

if(password == ""){
    alert("Enter Password");
    return false;
}

return true;
}

