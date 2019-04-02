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
        background-color:  #e6ffff
;
        background-image: linear-gradient( #e6ffff, white);
        height: 200px;
        width: 100%;


    }
    </style>
</head>

<body>
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
                    <li><a href="#">view Jobs</a></li>
                    <li class="right">
                        <a href="../backend/api/user/auth/logout.php" style="color:blue">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row page-content">

            <div class="col-md-10 col-md-offset-1">
                <div id="body-section">
                    <div class="top-bar-image">
                        <center>

                            <div style="padding-top:5px;padding-bottom:2px">
                                <img src=" <?php echo "data:image ; base64 , ". $companyInfo['company_logos'] ; ?>" width="200px" height="120px" class="image"
                                    alt="company image" />
                            </div>
                            <div>
                                <h3 class="text-info text-capitalize"> <?php echo $companyInfo['company_name'] ; ?> </h3>
                            </div>

                        </center>
                    </div>
                    <div style="background:white;margin-top:3px;height:400px">
                        <div class="row" style="padding:10px;
                            color:gray;font-size:18px">
                            <div class="col-md-3 col-md-offset-4">
                                User Name :

                            </div>
                            <div class="col-md-3 text-capitalize">
                            <?php echo $companyInfo['user_name'] ; ?>
                            </div>
                        </div>
                        <div class="row" style="padding:10px;
                            color:gray;font-size:18px">
                            <div class="col-md-3 col-md-offset-4">

                                Company Website :

                            </div>
                            <div class="col-md-3">
                             <a href= "<?php echo  $companyInfo['website_name'] ; ?>"><?php echo  $companyInfo['company_website'] ; ?></a>
                            </div>
                        </div>
                        <div class="row" style="padding:10px;
                            color:gray;font-size:18px">
                            <div class="col-md-3 col-md-offset-4">

                                Location :

                            </div>
                            <div class="col-md-3 text-capitalize">
                            <?php echo  $companyInfo['company_location'] ; ?>
                            </div>
                        </div>
                        <!-- <div class="row" style="padding:10px;
                            color:gray;font-size:18px">
                            <div class="col-md-3 col-md-offset-4">

                                Email :

                            </div>
                            <div class="col-md-3">
                                @gmail.com
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

        </div>
    </div>


    <footer class="footer">
        <div class="container">
            <p class="text-muted text-center">Copyright &copy; information hub - all rights reserved</p>
        </div>
    </footer>

</body>
<!-- <script src="../ajax/admin/compnay-info.js"></script> -->

</html>