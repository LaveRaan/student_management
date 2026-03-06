<?php

session_start();

$username = $_POST['user_name'];
$password = $_POST['password'];

if(isset($username)&& isset($password)){
    $_SESSION['admin'] = $username;

    setcookie("last_login", date("d-m-Y H:i:s"), time()+3600);
    header("Location: dashboard.php");
    exit();

}else{

    echo "Invalid Username or Password";
}

?>