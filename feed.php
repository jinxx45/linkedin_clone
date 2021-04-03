<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed | Linkedin</title>
      <!-- Bootstrap Link -->
      <link rel="stylesheet" href="bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
      <!-- Css File -->
      <link rel="stylesheet" href="feed.css">
      <!-- google fonts -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@300&display=swap" rel="stylesheet">
      <!-- scripts -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>      
    
     <div class="nav-head">
          <!-- Navbar -->
            <div class="nav-container">
                <nav class="navbar navbar-light ">
                    <div style="display: flex; flex-direction:row">
                    <a>
                        <img class="me-3" src="assets/images/logo.png" height="40" width="40" alt="">
                    </a>

                    <form class="d-flex">
                       
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <img style=" margin-left:14px; margin-top:15px; color:#171818;   position: absolute;" src="assets/images/search-solid.svg" width="15" height="15" alt="">
                    </form>

                   <!-- Icons -->

                   <div class="icon-container">
                       <a href="feed.html">
                        <div style="margin-left: 300px; width:40px; font-weight:bolder; filter: invert(0.5) sepia(5) hue-rotate(202deg) saturate(10) brightness(1); " class="icon-with-text">
                            <img  src="assets/images/home-solid.svg" height="25" width="25" alt="">
                            <p style=" width:60px; " >Home</p>
                       </div>
                       </a>
                       
                   </div>

                <div class="icon-container">
                    <a href="network.html">
                        <div style="width:75px" class="icon-with-text">
                            <img style="margin-left: 19px; " src="assets/images/users-solid.svg" height="25" width="25"alt="">
                            <p>My Network</p>
                       </div>
                    </a>
                 
                </div>

                <div class="icon-container">
                    <a href="jobs.html">
                        <div style="width: 40px;" class="icon-with-text">
                            <img src="assets/images/briefcase-solid.svg" height="25" width="25" alt="">
                            <p>Jobs</p>
                        </div>
                    </a>
                </div>

                <div class="icon-container">
                    <a href="">
                        <div  style="width: 40px;"  class="icon-with-text">
                            <img src="assets/images/comment-dots-solid.svg" height="25" width="25" alt="">
                            <p style="margin-left: -18px;">Messages</p>
                        </div>
                    </a>
                </div>

                <div class="icon-container">
                    <a href="">
                        <div class="icon-with-text">
                            <img style="margin-left: 18px;" src="assets/images/bell-solid.svg" height="25" width="25" alt="">
                            <p>Notifications</p>
                        </div>
                    </a>
                </div>

                <div class="icon-container">
                    <a href="">
                        <div class="icon-with-text">
                            <img style="margin-left: 30px;" src="assets/images/user-regular.svg" height="25" width="25" alt="">
                            <p style="width: 150px;  "><?php echo $_SESSION['username'] ?></p>
                        </div>
                    </a>
                </div>

                    </div>
                </nav>
            </div>
    </div>
  
    <!-- Body Content -->
    <div class="body-container">
        <div class="row">
            <div class="col col-3 left-container">
                <div class="left-card">
                    <div class="left-card-menu-items">
                        <a href="">Groups</a>
                        <a href="">Events</a>
                        <a href="">Followed Hastags</a>
                    </div>
                </div>

            </div>

            <div class="col col-6 middle-container">

                
                <div class="post-card">

                    <!-- User Dp and the start post Button -->

                    <div class=" ms-4 mt-2 defaultuserdp">


                    <form id="form" action="update-profile-pic.php" method="POST" enctype="multipart/form-data">

                        
                       
                                        <img id="imgFileUpload" alt="Update Profile Picture" title="Update Profile Picture" src="assets/images/user dp.png"  height="70" width="70" style="cursor: pointer" />
                                        <input type="file" onchange="form.submit()"  style="display: none" />
                                        <?php ?>
                                        

                    </form>
                        
                       
                        <button type="button" data-toggle="modal" data-target="#exampleModal" class="post-button ms-3 mt-2">Start a Post</button>

                        
                       
                    </div>


                    <!-- Modal Code -->


                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Create a Post</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">

                                <!-- Modal Content -->

                              <div style="display: flex;">

                                  <img style=" width: 50px; height: 50px;" src="assets/images/user dp.png" alt="">
                                  <p style="font-size: 20px;"><?php echo $_SESSION['username'] ?></p>

                              </div>

                              <form action="upload-post.php" method="POST" enctype="multipart/form-data">

                              <div class="modal-post-content">
                                  <textarea name="caption-text" style="margin-top: 20px; border:none ;resize:none; padding:10px" placeholder="What do you want to talk about ?" name="modal-post-content" id="" cols="50" rows="4"></textarea>
                              </div>

                              <div class="modal-icons">

                                    


                                        <img id="imgFileUpload" alt="Select File" title="Select File" src="assets/images/image-upload.png"  height="40" width="40" style="cursor: pointer" />
                                        <span id="spnFilePath"></span>
                                        <input type="file" name="file" id="FileUpload1" style="display: none" />
     
                                          <a href="">
                                            <img style="margin-left: 20px;" src="assets/images/preview.jpg" height="40" width="40" alt="">
                                          </a>
                                   
                                 
                                  
                              </div>



                            </div>
                            <div class="modal-footer">
                           
                              <input type="submit" name="submit" value="Upload" class="btn btn-primary">
                            </form>
                            </div>
                          </div>
                        </div>
                      </div>

                  

                    <!-- Image , Video Upload options -->

                    <div class="upload-options ms-2 mt-2">
                        <!-- Image Upload -->
                        <div class="icon-with-sidetext">
                            <button>
                                <img src="assets/images/image-upload.png" height="40" width="40" alt="">
                                <p style="margin-top: 10px;"  class=" ms-1">Image</p>
                            </button>
                        </div>
                        <!-- Video Upload -->
                        <div class="icon-with-sidetext">
                            <button>
                                <img src="assets/images/preview.jpg" height="40" width="40" alt="">
                                <p style="margin-top: 10px;"  class=" ms-1">Video</p>
                            </button>
                        </div>

                        <div class="icon-with-sidetext">
                            <button>
                                <img src="assets/images/calender.jpg" height="40" width="40" alt="">
                                <p style="margin-top: 10px;"  class=" ms-1">Events</p>
                            </button>
                        </div>
                        

                    </div>

                </div>

                <br>
                <br>

                <?php

                include("connection.php");
			
			$sql = "SELECT username, follower_count, uploaded_image_path, post_caption, no_of_likes, posted_time FROM posts order by posted_time desc";
			$resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));			
			while( $record = mysqli_fetch_assoc($resultset) ) {
			?>

                <div class="post-content-card">

                    <div class="post-header">
                        
                        <!-- User Profile Picture -->
                        <img class="user-profile-image" src="assets/images/amazon dp.png" alt="">

                        <!-- Username , time , follower count -->

                        <div class="post-user-container">

                            <!-- User Name -->
                            <p class="post-username"><?php echo $record['username'] ?></p>

                            <!-- Followers Count -->
                            <p class="post-follower-count"><?php echo $record['follower_count'] ?> followers</p>

                            <!-- Time Ago -->
                            <p class="post-time" ><?php echo $record['posted_time'] ?></p>
                        </div>

                    </div>

                    <!-- End of Post Header -->

                    <!-- Post Caption -->

                    
                        <p class="post-caption-text"><?php echo $record['post_caption'] ?></p>
                    

                    <!-- Post Image -->

                        <img class="user-postedimage" src="db-files/posts/<?php echo $record['uploaded_image_path'];?>" alt="">

                </div>

                <?php } ?>



               




                


            </div>

            <div class="col col-3 right-container">
                <div class="right-card">

                    <div class="right-card-header">

                        <p >Linkedin News</p>
                        <hr style="margin-top:-10px;">

                    </div>

                    <!-- News Columns -->
                    <div class="news-columns">

                        <a href="">
                            <div style="margin-top: 12px;" class="individual-news">
                                <p class="news-heading">The internship skills in demand</p>
                                <div class="news-description">
                                    <!-- Time -->
                                    <p>14h ago</p>
                                    <!-- No of readers -->
                                    <p>254 readers</p>
                                </div>
                            </div>
                        </a>

                      <a href="">
                        <div class="individual-news">
                            <p class="news-heading">Maths, physics, not must for aicte</p>
                            <div class="news-description">
                                <!-- Time -->
                                <p>4h ago</p>
                                <!-- No of readers -->
                                <p>25 readers</p>
                            </div>
                        </div>
                      </a>
                        
                      
                      <a href="">
                        <div class="individual-news">
                            <p class="news-heading">Tech startups hiring from B-schools</p>
                            <div class="news-description">
                                <!-- Time -->
                                <p>1h ago</p>
                                <!-- No of readers -->
                                <p>2,949 readers</p>
                            </div>
                        </div>
                      </a>

                    
                      <a href="">
                        <div class="individual-news">
                            <p class="news-heading">Building your social networks</p>
                            <div class="news-description">
                                <!-- Time -->
                                <p>23h ago</p>
                                <!-- No of readers -->
                                <p>21,234 readers</p>
                            </div>
                        </div>  
                      </a>
                        
                        <a href="">
                            <div class="individual-news">
                                <p class="news-heading">Netflix India growth strategy</p>
                                <div class="news-description">
                                    <!-- Time -->
                                    <p>14h ago</p>
                                    <!-- No of readers -->
                                    <p>45 readers</p>
                                </div>
                            </div>
                        </a>

                       
                        
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal Script -->

    <script>

    document.getElementsByClassName("file").onchange = function()
     {
    document.getElementById("form").submit();
                    };
                
        window.onload = function () {
            var fileupload = document.getElementById("FileUpload1");
            var filePath = document.getElementById("spnFilePath");
            var image = document.getElementById("imgFileUpload");
            image.onclick = function () {
                fileupload.click();
            };
            fileupload.onchange = function () {
                var fileName = fileupload.value.split('\\')[fileupload.value.split('\\').length - 1];
                filePath.innerHTML = "<b>Selected File: </b>" + fileName;
            };
        };
    </script>
   
</body>
</html>