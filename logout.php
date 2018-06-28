<?php

session_start();
session_destroy(); //remove sid-login from server storage
session_write_close();
unset($_COOKIE['email']);
unset($_COOKIE['password']);
header('Location: /evalPHP/login.php');

?>