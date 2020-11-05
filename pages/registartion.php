<?php
session_start();
if (isset($_POST['submit'])) {
    # code...
    $name = $_POST['username'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $passwordCon = $_POST['password_confirm'];
    $face = $_POST['face'];
    $insta = $_POST['insta'];
    $twitter = $_POST['twitter'];
}
$errors = [];
if (empty($name)) {
    # code...
    $errors[] = "user name is reqired ";
} elseif (preg_match('/^[a-zA-Z0-9]{5,}$/', $name)) { 
    $errors[] = " be sure it more than 5 char";
}
// 
if (empty($mail)) {
    # code...
    $errors[] = "user mail is reqired ";
} elseif (! filter_var($mail, FILTER_VALIDATE_EMAIL)) {  
    $errors[] ="email is not valid";
}
// 
if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["passwordCon"])) {
   
    if (strlen($_POST["password"]) <= '8') {
        $errors = "Your Password Must Contain At Least 8 Characters!";
    }
    elseif(!preg_match("#[0-9]+#",$password)) {
        $errors = "Your Password Must Contain At Least 1 Number!";
    }
    elseif(!preg_match("#[A-Z]+#",$password)) {
        $errors = "Your Password Must Contain At Least 1 Capital Letter!";
    }
    elseif(!preg_match("#[a-z]+#",$password)) {
        $errors = "Your Password Must Contain At Least 1 Lowercase Letter!";
    } else {
        $$errors = "Please Check You've Entered Or Confirmed Your Password!";
    }
}
// 
if (empty($insta)) {
    # code...
    $errors[] = "user mail is reqired ";
} elseif (! filter_var($insta, FILTER_VALIDATE_EMAIL)) {  
    $errors[] ="email is not valid";
}
// 
if (empty($face)) {
    # code...
    $errors[] = "user mail is reqired ";
} elseif (! filter_var($face, FILTER_VALIDATE_EMAIL)) {  
    $errors[] ="email is not valid";
}
// 
if (empty($twitter)) {
    # code...
    $errors[] = "user mail is reqired ";
} elseif (! filter_var($twitter, FILTER_VALIDATE_EMAIL)) {  
    $errors[] ="email is not valid";
}
if (empty($errors)) {
    # code...
    $_SESSION['mail']=$mail;
    $_SESSION['password']=$password;
    $_SESSION['face']=$face;
    $_SESSION['insta']=$insta;
    $_SESSION['twitter']=$twitter;
    header("location: ../home.php");

}else{
    $_SESSION['errors']=$errors;
    header("location: registration.php");
}