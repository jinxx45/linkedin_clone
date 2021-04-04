<?php
// Include the database configuration file
include 'connection.php';
session_start();
$statusMsg = '';

$username = $_SESSION['username'];



// File upload path
$targetDir = "db-files/profile-pics/";
$fileName = basename($_FILES["dp-file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(1)
{
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    
    if(in_array($fileType, $allowTypes))
    {
        // Upload file to server
        if(move_uploaded_file($_FILES["dp-file"]["tmp_name"], $targetFilePath))
        {
            // Insert image file name into database
            $insert = $con->query("UPDATE  user_personal_details SET user_dp = '$fileName' where first_name = '$username' ");
            $post_dp_change = $con->query("UPDATE  posts SET user_dp = '$fileName' where username = '$username' ");
            if($insert){
                echo '<script language="javascript">';
                echo 'alert("Profile Picture Updated Successfully! ")';
                echo '</script>';
                header("location:feed.php");
                
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