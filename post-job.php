<?php
session_start();
include('connection.php');

    $posted_by = $_SESSION['username'];
    $job_title = $_POST['job-title'];
    $company = $_POST['company-name'];
    $job_description = $_POST['job-desc'];
    $pay = $_POST['pay'];
    $job_category = $_POST['job-type'];
    $job_location = $_POST['job-loc'];
    $usernmae = $_SESSION['username'];
    $no_of_applicants = 0;
 
 
    $sql = "INSERT INTO jobs  VALUES ('$job_title','$company','$job_description','$pay','$job_category','$job_location','$usernmae','$no_of_applicants')";
    
        
    if ($con->query($sql) === TRUE) {
        echo '<script>alert("Job has been posted successfully")</script>';      
  header('location: jobs.html');
  exit;
         } 
  else 
  {
  echo "Error: " . $sql . "<br>" . $con->error;
  }

$con->close();


?>