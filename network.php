<?php 
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Network | Linkedin</title>
     <!-- Bootstrap Link -->
     <link rel="stylesheet" href="bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
    <!-- Local CSS -->
    <link rel="stylesheet" href="network.css">
    <link rel="stylesheet" href="feed.css">
    <!-- Font Awesome -->
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
                     <a href="feed.php">
                      <div style="margin-left: 300px; width:40px;  " class="icon-with-text">
                          <img  src="assets/images/home-solid.svg" height="25" width="25" alt="">
                          <p style=" width:60px; " >Home</p>
                     </div>
                     </a>
                     
                 </div>

              <div class="icon-container">
                  <a href="network.php">
                      <div style="width:75px; font-weight:bolder; filter: invert(0.5) sepia(5) hue-rotate(202deg) saturate(10) brightness(1);" class="icon-with-text">
                          <img style="margin-left: 29px; " src="assets/images/users-solid.svg" height="25" width="25"alt="">
                          <p>My Network</p>
                     </div>
                  </a>
               
              </div>

              <div class="icon-container">
                  <a href="jobs.php">
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
                          <img style="margin-left: 18px;" src="assets/images/user-regular.svg" height="25" width="25" alt="">
                          <p>My Profile</p>
                      </div>
                  </a>
              </div>

                  </div>
              </nav>
          </div>
        </div>
    <!-- End Of navbar -->

    <div class="body-container">
        <div class="row">

            <div class="col col-4">
    
                <div class="side-menu">

                    <div  class="side-menu-header">
                        <p style="font-weight: bolder;">Manage My network</p> 
                    </div>

                    <div class="side-menu-icon-with-text">

                        <a href="">
                            <img class="side-menu-icon" src="assets/images/wifi-solid.svg" alt="">
                            <p class="side-menu-text">Connections</p>
                        </a>                       

                    </div>


                    
                    <div class="side-menu-icon-with-text">

                        <a href="">
                            <img class="side-menu-icon" src="assets/images/id-card-regular.svg" alt="">
                            <p class="side-menu-text">Contacts</p>
                        </a>                       

                    </div>


                    
                    <div class="side-menu-icon-with-text">

                        <a href="">
                            <img class="side-menu-icon" src="assets/images/smile-wink-regular.svg" alt="">
                            <p class="side-menu-text">People I follow</p>
                        </a>                       

                    </div>


                    
                    <div class="side-menu-icon-with-text">

                        <a href="">
                            <img class="side-menu-icon" src="assets/images/users-solid.svg" alt="">
                            <p class="side-menu-text">Groups</p>
                        </a>                       

                    </div>


                    
                    <div class="side-menu-icon-with-text">

                        <a href="">
                            <img class="side-menu-icon" src="assets/images/calendar-check-regular.svg" alt="">
                            <p class="side-menu-text">Events</p>
                        </a>                       

                    </div>


                    
                    
                    <div class="side-menu-icon-with-text">

                        <a href="">
                            <img class="side-menu-icon" src="assets/images/pager-solid.svg" alt="">
                            <p class="side-menu-text">Page</p>
                        </a>                       

                    </div>


                    <div class="side-menu-icon-with-text">

                        <a href="">
                            <img class="side-menu-icon" src="assets/images/hashtag-solid.svg" alt="">
                            <p class="side-menu-text">Hashtags</p>
                        </a>                       

                    </div>


                    
                </div>
            </div>
    
            <div class="col col-8">

                <!-- Invites Bar -->
                <div class="invitation-bar">
                    <div class="invitation-columns">
                        <p class="invitation-text">No pending invitations</p>
                    </div>

                    <a class="invitation-manage" href="">Manage</a>
                </div>


                <p style="font-weight: bold; margin-left: -80px; margin-top: 30px;">People You Might Know </p>

                <div style="margin-top: -10px;" class="network-rec-users-bar">


                
                <?php

                           
                            include('connection.php');
                            $username=$_SESSION['username'] ; 
                            $sql = "SELECT id ,  first_name , user_dp  FROM user_personal_details where first_name != '$username' ";
			                $resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
                            $i=0;
                            while( $record = mysqli_fetch_assoc($resultset) ) {
                                $id[$i] = $record['id'];
                           
                        ?>

                   

                    
                    <div  class="rec-user-card">

                        <img class="network-user-dp" src="db-files/profile-pics/<?php echo $record['user_dp'] ?>" alt="">
                        <p class="network-username"><?php echo $record['first_name'] ?></p>
    
                            <button onclick='follow_button_click(<?php echo $id[$i]?>, "<?php echo $record["first_name"] ?>")' class="follow-button">
                                <p id="<?php echo $id[$i]?>">Follow</p>
                            </button>
                            
                    </div>

                       


        <?php $i++; } ?>


                   
                         <script>
                        function follow_button_click(id,username)
                        {
                            document.getElementById(id).innerHTML = 'Requested';
                           

                        }
                        </script>


                </div>


            </div>
    
        </div>
    </div>


  

</body>
</html>