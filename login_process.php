<?php


session_start();

if (isset($_SESSION["userlogged"]) == true) {
     header("Location: profile.php");
     exit;
}

$correctEmail = "abc@gmail.com";
$correctPass = "123456789";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $userEnteredEmail = $_POST['enteredEmail'];
     $userEnteredPass = $_POST['enteredPass'];

     if (empty($_POST["user"]) == true) {
          $_SESSION["usernameError"] = "User is Required";
          header("Location: login_form.php");
          exit;
     }
     $realUser = $_POST["user"];
     $userMail = $_POST["enteredEmail"];
     $realUserPass = $_POST["enteredPass"];



     if ($userEnteredEmail == $correctEmail && $userEnteredPass == $correctPass) {
          $_SESSION["userlogged"] = "Yes";
          $_SESSION["enteredUser"] = $realUser;
          header("Location: profile.php");
          exit;
     } else {
          $_SESSION["data_entered"] = "Your Email or Password is Incorrect";
          header("Location: login_form.php");
          exit;
     }
} else {

     header("Location: login_form.php");
}
