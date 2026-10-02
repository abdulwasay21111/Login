<?php 

echo "<pre>";
print_r($_FILES["enteredFile"]);
echo "</pre>";

$photo_name = $_FILES['enteredFile']["name"];
$photo_type = $_FILES['enteredFile']["type"];
$photo_tmppath = $_FILES['enteredFile']["tmp_name"];
$photo_size = $_FILES['enteredFile']["size"];

$allowed_extensions = ["jpeg", "jpg" , "png"];
$original_extensions = pathinfo($photo_name, PATHINFO_EXTENSION);

$required_size = 2 * 1024 * 1024 ;

// Check 1 : Solving extension problem

if(in_array($original_extensions, $allowed_extensions) == false){
    die("Selected File extension is not allowed");
}


// Check 2 : Solving file name problem
$new_name = "images/" . uniqid() . ".$original_extensions";

// Check 3 : Solving Size Problem
if($photo_size > $required_size){
    die("Images size is greater than 2 mb");
}


move_uploaded_file($photo_tmppath, $new_name);




?>