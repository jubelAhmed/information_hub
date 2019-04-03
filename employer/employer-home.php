<?php 
  session_start();
  if(!$_SESSION['valid'] && !$_SESSION['type'] == "employer"){
    session_destroy();
    header("Location:http://localhost/information_hub/index.php");
  }

  include_once('../backend/config/Database.php');
  include_once('../backend/models/Employer.php');
  include_once('../backend/api/user/job/employer.php');
  
  
  $database = new Database();
  
  $db = $database->connect();
  
  $employer = new Employer($db);
  $employerId = $_SESSION['user_login_uid'];
  
      
  
 $result = getCompanyAllInfo($employer,$employerId);

 $companyInfo = json_decode($result,true);
 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="../assets/static/img/icon-infohub.png" />
    <title>information-hub</title>
    <!-- Bootstrap core CSS -->
    <link href="../assets/bootstrap.3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/font-awesome.4.6.1/css/font-awesome.min.css" rel="stylesheet" />
    <link href="../assets/css/animate.min.css" rel="stylesheet" />
    <link href="../assets/css/timeline.css" rel="stylesheet" />
    <link href="../assets/css/cover.css" rel="stylesheet" />
    <link href="../assets/css/forms.css" rel="stylesheet" />
    <link href="../assets/css/buttons.css" rel="stylesheet" />
    <link href="../assets/css/jobpost.css" rel="stylesheet" />
    <script src="../assets/js/jquery.1.11.1.min.js"></script>
    <script src="../assets/bootstrap.3.3.6/js/bootstrap.min.js"></script>

    <style>
    .top-bar-image {
        /* background-color:  #e6ffff
;
        background-image: linear-gradient( #e6ffff, white); */
        height: 200px;
        width: 100%;


    }
    </style>
</head>

<body style="background-color:white">
    <nav class="navbar navbar-white navbar-fixed-top text-danger ">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./home.php"><b>Information Hub</b></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="./employer-home.php">Home</a></li>
                    <li><a href="./jobs/post.php">Create New Job</a></li>
                    <li><a href="./jobs/employer-jobs.php">view Jobs</a></li>
                    <li class="right">
                        <a href="../backend/api/user/auth/logout.php" style="color:blue">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class=" " style="background-color:white ; ">
        <div class="row  ">

            <div class="col-md-12 ">
                <div id="body-section">
                    <div class="top-bar-image" style="background-color:#FBFCFC ; margin-top:72px">
                        <center>

                            <div style="padding-top:5px;padding-bottom:2px">
                                <img src=" <?php echo "data:image ; base64 , ". $companyInfo['company_logos'] ; ?>"
                                    width="200px" height="120px" class="img-thumbnail image " alt="company image" />
                            </div>
                            <div>
                                <h3 class="text-info text-capitalize"> <?php echo $companyInfo['company_name'] ; ?>
                                </h3>
                            </div>

                        </center>
                    </div>
                    <div style="background:white;margin-top:3px;height:300px">
                        
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div>
                                        <h2 class="text-info">About</h2>
                                    </div>
                                    <div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur culpa ad id delectus impedit cupiditate sint itaque unde ullam, deleniti cumque beatae ratione maiores minus temporibus quod rerum excepturi quis?</p>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                       
                    </div>
                </div>
            </div>

        </div>
    </div>


    <footer class="" style="background-color:black ;color:white;padding:20px">
        <div class="container ">

            <div class="row">

                <div class="col-md-4">
                    <center>
                        <h3 class="text-info text-capitalize"> <?php echo $companyInfo['company_name'] ; ?> </h3>
                    </center>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-3 ">
                            <span>Email:</span>
                        </div>
                        <div class="col-md-6">
                            <a
                                href="mailto:<?php echo  $companyInfo['email'] ; ?>"><?php echo  $companyInfo['email'] ; ?></a>

                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-3 ">
                            <span>location:</span>
                        </div>
                        <div class="col-md-6">
                            <?php echo  $companyInfo['company_location'] ; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <span>website:</span>
                        </div>
                        <div class="col-md-6">
                            <a
                                href="<?php echo  $companyInfo['website_name'] ; ?>"><?php echo  $companyInfo['company_website'] ; ?></a>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class=" profile-box">
                        
                        <ul class="list-unstyled list-social">
                            <li class="social-list">
                                <a href="#"><i class="social-i fa fa-twitter"></i> @twitter</a>
                            </li>
                            <li class="social-list">
                                <a href="#"><i class="social-i fa fa-facebook"></i>
                                    @facebook</a>
                            </li>
                            <li class="social-list">
                                <a href="#"><i class="social-i fa fa-linkedin"></i>
                                    @linkedin</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </footer>

</body>
<!-- <script src="../ajax/admin/compnay-info.js"></script> -->

</html>