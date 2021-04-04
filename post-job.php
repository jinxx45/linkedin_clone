<?php
include('connection.php');
session_start();
$statusMsg = '';




$targetDir = "db-files/jobs/companylogo/";
$fileName = basename($_FILES["company-logo"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(1)
{

  $posted_by = $_SESSION['username'];
  $job_title = $_POST['job-title'];
  $company = $_POST['company-name'];
  $job_description = $_POST['job-desc'];
  $pay = $_POST['pay'];
  $job_category = $_POST['job-type'];
  $job_location = $_POST['job-loc'];
  $username = $_SESSION['username'];
  $no_of_applicants = 0;
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf','JPG','PNG','JPEG','GIF','PDF');
    if(in_array($fileType, $allowTypes))
    {
        // Upload file to server
        if(move_uploaded_file($_FILES["company-logo"]["tmp_name"], $targetFilePath))
        {
            // Insert image file name into database
            $sql = $con->query("INSERT INTO jobs  VALUES ('$job_title','$company','$job_description','$pay','$job_category','$job_location','$username','$no_of_applicants','$fileName')"); 
            if($sql){
                echo '<script language="javascript">';
                echo 'alert("Job Posted Sucessfully ! ")';
                echo '</script>';
                header("location:jobs.php");
            }else{
                echo("Error description: " . $con -> error);

            } 
        }
        else
        {
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else
    {
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}

else
{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>
 
 
    
    
