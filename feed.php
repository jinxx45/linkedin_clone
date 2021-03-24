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
                        <img src="assets/images/user dp.png" height="70" width="70" alt="">
                        <button onclick="location.href = 'www.yoursite.com';" class="post-button ms-3 mt-2">Start a Post</button>
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

                <div class="post-content-card">

                    <div class="post-header">
                        
                        <!-- User Profile Picture -->
                        <img class="user-profile-image" src="assets/images/amazon dp.png" alt="">

                        <!-- Username , time , follower count -->

                        <div class="post-user-container">

                            <!-- User Name -->
                            <p class="post-username">Amazon</p>

                            <!-- Followers Count -->
                            <p class="post-follower-count">1,59,345 followers</p>

                            <!-- Time Ago -->
                            <p class="post-time" >16h ago</p>
                        </div>

                    </div>

                    <!-- End of Post Header -->

                    <!-- Post Caption -->

                    
                        <p class="post-caption-text">Are you passionate about developing innovative solutions to novel legal questions? Chart your own path with the legal team at Amazon.</p>
                    

                    <!-- Post Image -->

                        <img class="user-postedimage" src="assets/images/amazon post image.jpg" alt="">

                </div>



                <div class="post-content-card">

                    <div class="post-header">
                        
                        <!-- User Profile Picture -->
                        <img class="user-profile-image" src="assets/images/google dp.png" alt="">

                        <!-- Username , time , follower count -->

                        <div class="post-user-container">

                            <!-- User Name -->
                            <p class="post-username">Google</p>

                            <!-- Followers Count -->
                            <p class="post-follower-count">7,99,450 followers</p>

                            <!-- Time Ago -->
                            <p class="post-time" >18h ago</p>
                        </div>

                    </div>

                    <!-- End of Post Header -->

                    <!-- Post Caption -->

                    
                        <p class="post-caption-text">In the newest #MyPathToGoogle Nikhil Nerkar shares his experience as an MBA intern turned Trust and Safety Strategist</p>
                    

                    <!-- Post Image -->

                        <img class="user-postedimage" src="assets/images/google-post-image.jpg" alt="">

                    

                </div>



                <div class="post-content-card">

                    <div class="post-header">
                        
                        <!-- User Profile Picture -->
                        <img class="user-profile-image" src="assets/images/amazon dp.png" alt="">

                        <!-- Username , time , follower count -->

                        <div class="post-user-container">

                            <!-- User Name -->
                            <p class="post-username">Amazon</p>

                            <!-- Followers Count -->
                            <p class="post-follower-count">1,59,345 followers</p>

                            <!-- Time Ago -->
                            <p class="post-time" >16h ago</p>
                        </div>

                    </div>

                    <!-- End of Post Header -->

                    <!-- Post Caption -->

                    
                        <p class="post-caption-text">Are you passionate about developing innovative solutions to novel legal questions? Chart your own path with the legal team at Amazon.</p>
                    

                    <!-- Post Image -->

                        <img class="user-postedimage" src="assets/images/amazon post image.jpg" alt="">

                    

                </div>




                


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
   
</body>
</html>