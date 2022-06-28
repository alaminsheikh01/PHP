<?php

$myemail = "alamin@gmail.com";
$mypass = '123456';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $rem = $_POST['remember'];

    if($email == $myemail and $pass == $mypass) {
        if(isset($_POST['remember']) ){
            setcookie('email', $email, time()+60*60*7);
            setcookie('password', $pass, time()+60*60*7);         
    }
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $pass;
            header('location:welcome.php');
}else{
        echo "Email or password is invalid. <br> click here to <a href='index.php'> try again </a>";
    }

}else{
    header('location:index.php');
}

?>