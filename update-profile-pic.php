<?php
// Include the database configuration file
include 'connection.php';
session_start();
$statusMsg = '';

// POST CAPTION


$username = $_SESSION['username'];



// File upload path
$targetDir = "db-files/profile-pics/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"]))
{
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    $caption_text = $_POST['caption-text'];
    if(in_array($fileType, $allowTypes))
    {
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath))
        {
            // Insert image file name into database
            $insert = $con->query("INSERT into user_personal_details (user_dp,first_name) VALUES ('$fileName','$username')");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
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