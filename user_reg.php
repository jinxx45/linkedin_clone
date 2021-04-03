<?php
session_start();
include('connection.php');

    $username = $_POST['username'];  
    $email = $_POST['email-id'];
    $password = $_POST['password'];
    $sql = "INSERT INTO user_account_credentials  VALUES ('$username','$email','$password')";
    $sql1 = "INSERT INTO user_personal_credentials (first_name) VALUES('$username')";
    $_SESSION['username'] = $username;
        
    if ($con->query($sql) && $con->query($sql1) === TRUE) {
  header('location: feed.php');
  exit;
         } 
  else 
  {
  echo "Error: " . $sql . "<br>" . $con->error;
  }

$con->close();


?>