<?php
session_start();
 
include("connection.php");
 error_reporting(E_ALL & ~E_NOTICE);
if($_SESSION['username']){
   header("location:feed.php");
}

$err="";



if($_SERVER["REQUEST_METHOD"]=="POST"){
     $email = $_POST['email-id']; 

    
      $pass = $_POST['pass'];  
        $sql = "select * from user_account_credentials where email='$email' and password='$pass'";
        $sql1 = "select username from user_account_credentials where email='$email'";  
        $result = mysqli_query($con, $sql);  
        $result1 = mysqli_query($con, $sql1); 
        $row = $result1->fetch_assoc(); 
          if ($result->num_rows > 0) 
         {

             $_SESSION['username']=$row['username'];
             $_SESSION['uid']=$row['user_id'];
            
             header("location:feed.php");
            

         }
         else {
             
            $err="invalid username or password";
           

         }
        

}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | LinkedIn</title>

        <!-- Bootstrap Link -->
        <link rel="stylesheet" href="bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
        <!-- External CSS -->
        <link rel="stylesheet" href="signup.css">
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@300&display=swap" rel="stylesheet">
        <!-- Font-Awesome -->
      
</head>
<body>
    <div class="image-container" >
        <img class="main-image" src="assets/images/linkeduh.png" height="150" width="150" alt="">
    </div>
    
    <h1 style="color: #0177b6; text-align:center; font-weight: bolder; ">Make the most of your professional life</h1>
    <div class="main-container">
        
        <!-- Form  -->
        <form action="" method="POST">
            <div class="mb-1">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input name="email-id" type="email" class="form-control" aria-describedby="emailHelp" required>
              
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input name="pass" type="password" class="form-control"  required>
            </div>
           
            <div class="d-grid gap-2 col-10 mx-auto">
                <button  class="btn btn-primary" type="submit">Sign in</button>
            </div>
          
                <h6 style="text-align: center; margin-top:30px">New to linkedin ? <a href="signup.html">Join now for free</a></h6>
           
        </form>    
    </div>
    
</body>
</html>