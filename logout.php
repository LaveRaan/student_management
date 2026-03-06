<?php

session_start();     // session start

session_unset();     // session variables remove

session_destroy();   // session destroy

header("Location: login.html");  // redirect to login page

exit();

?>