<?php

$nameErr = $emailErr = $mobileErr = $passwordErr = $confirmErr = $fileErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["password"])) {
    $passwordErr = "password is required";
  } else {
    $password = $_POST['password'];
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialchars = preg_match('@[^\w]@', $password);
    
    if(!$uppercase || !$lowercase || !$number || !$specialchars || strlen($password) < 8) {
      $passwordErr = "password is not strong";
    }
    else{
      $passwordErr = "";
    } 
  }
  if ($_POST["password"] === $_POST["confirm-password"]) {
    $confirmErr = "";
    }
    else {
      $confirmErr = "password is not match";
    }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["mobile"])) {
    $mobileErr = "phone number is required";
  }
  if (empty($_POST["image"])) {
    $fileErr = "file not selected";
  }
  
  }

  
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>