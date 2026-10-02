<?php
session_start();
if (isset($_SESSION["userlogged"]) == false) {

    header("Location: login_form.php");
    exit;
}




?>
<h1> Welcome,  
<?php 
echo (isset($_SESSION["enteredUser"])) ? $_SESSION['enteredUser'] : "";
?>

</h1>
<a href="login_form.php">Logout</a>