<?php

session_start();
session_destroy();
echo "You successfully Logout <br>";
if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])) {
    $email = $_COOKIE['email'];
    $pass = $_COOKIE['pass'];
    setcookie('email', $email, time()-1);
    setcookie('pass', $pass, time()-1); 
  }

echo "Go to <a href='index.php'> Login</a> page "

?>