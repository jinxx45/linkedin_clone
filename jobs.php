<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs | Linkedin</title>
     <!-- Bootstrap Link -->
     <link rel="stylesheet" href="bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
     <!-- Css File -->
     <link rel="stylesheet" href="feed.css">
     <link rel="stylesheet" href="jobs.css">
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
                     <a href="feed.php">
                      <div style="margin-left: 300px; width:40px;  " class="icon-with-text">
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
                  <a href="">
                      <div style="width: 40px; filter: invert(0.5) sepia(5) hue-rotate(202deg) saturate(10) brightness(1); font-weight:bolder" class="icon-with-text">
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
  <!-- End of Navbar -->
        <div class="body-container">
            <div class="jobs-header-card">

                <div class="job-icon-with-sidetext mt-3 ms-3">
                    <button>
                        <img class="me-2 " src="assets/images/bookmark-solid.svg" height="20" width="20" alt="">
                        <p style="margin-top: 0px;"  class=" ms-1">My Jobs</p>
                    </button>
                </div>

                <div class="vertical-line">
                    <div class="job-icon-with-sidetext mt-3 ms-3">
                        <button>
                            <img class="me-2 " src="assets/images/bell-solid.svg" height="20" width="20" alt="">
                            <p style="margin-top: 0px;"  class=" ms-1">Job Alerts</p>
                        </button>
                    </div>
                </div>

                <div class="vertical-line">
                    <div class="job-icon-with-sidetext mt-3 ms-3">
                        <button>
                            <img class="me-2 " src="assets/images/money-bill-solid.svg" height="20" width="20" alt="">
                            <p style="margin-top: 0px;"  class=" ms-1">Salary</p>
                        </button>
                    </div>
                </div>

                <div class="vertical-line">
                    <div class="job-icon-with-sidetext mt-3 ms-3">
                        <button>
                            <img class="me-2 " src="assets/images/clipboard-solid.svg" height="20" width="20" alt="">
                            <p style="margin-top: 0px;"  class=" ms-1">Skills Assesment</p>
                        </button>
                    </div>
                </div>

                <div class="vertical-line">
                    <div style="margin-left: 460px" class="post-job-button">
                        <button onclick="location.href='post-job.html'">
                            <img class="me-3" src="assets/images/edit-regular.svg" height="20" width="20" alt="">
                            <p class="mt-3">Post a Job</p>
                        </button>

                    </div>
                </div>
            </div>
            <!-- End of Job header card -->

            <div class="search-job-card">
                <p style="margin-top:18px; font-size: 24px; font-weight:bold ; letter-spacing:1.3px">Search for your next Job<p>

                <div style="display: flex; flex-direction:row; margin-left:350px">

                    <form style="margin-top: -15px; " class="d-flex">
                        <input  style="background-color: white; width:500px" class="form-control me-2" type="search" placeholder="Search by title , skill or company" aria-label="Search">
                        <img style=" margin-left:14px; margin-top:15px; color:#171818;   position: absolute;" src="assets/images/search-solid.svg" width="15" height="15" alt="">
                    </form>

                    <form style="margin-top: -15px; margin-left:20px; " class="d-flex">
                        <input style="background-color: white; width:500px" class="form-control " type="search" placeholder="City , State or Zip Code" aria-label="Search">
                        <img style=" margin-left:14px; margin-top:15px; color:#171818;   position: absolute;" src="assets/images/map-marker-alt-solid.svg" width="15" height="15" alt="">
                    </form>
    
                </div>
            </div>

            <div class="recommended-jobs-section">

            <?php 
            include('connection.php');

            $sql = "SELECT job_title, company_name, company_logo, description  FROM jobs";
            $resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));			
            while( $record = mysqli_fetch_assoc($resultset) ) {

            ?>

                <div class="rec-job-card">

                    <img class="job-logo" src="db-files/jobs/companylogo/<?php echo $record['company_logo'] ?>" alt="">
                    <p class="job-title"><?php echo $record['job_title'] ?></p>
                    <p class="company-name"><?php echo $record['company_name'] ?></p>
                    

                </div>

                
            <?php } ?>

                



            </div>

            
        </div>
</body>
</html>