<?php
session_start();
include('connection.php');

    $username = $_POST['username'];  
    $email = $_POST['email-id'];
    $password = $_POST['password'];
    $sql = "INSERT INTO user_account_credentials  VALUES ('$username','$email','$password')";
    $_SESSION['username'] = $username;
        
    if ($con->query($sql) === TRUE) {
  header('location: feed.php');
  exit;
         } 
  else 
  {
  echo "Error: " . $sql . "<br>" . $con->error;
  }

$con->close();


?>