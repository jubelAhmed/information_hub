<?php 
    
    session_start();
    if(!$_SESSION['valid'] || $_SESSION['type'] == "user"){
        session_destroy();
        header("Location:http://localhost/information_hub/index.php");
     }

    include_once('../../backend/config/Database.php');
    include_once('../../backend/models/Job.php');
    //include_once('../../backend/models/Employer.php');
   
    

    $database = new Database();

    $db = $database->connect();

    $job = new Job($db);
    //$employer = new Employer($db);

    include '../../backend/api/user/job/get_job.php';
   // include '../../backend/api/user/job/employer.php';

   $employerId = $_SESSION['user_login_uid'];

    //$allPublishedJobArray = getPublishedJobs($job);
    $allPublishedJobArray = getPublishedOwnCompanyJobs($job,$employerId);
    //$companyInfo = getAllCompanyInfo($employer, $_SESSION['user_login_uid']);


    $publishedJobs = json_decode($allPublishedJobArray, true);

    

  /*   print_r($p['data'][0]['programming_skills'][0]);
 */
    


?>



<head>

    
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<link rel="icon" href="../../assets/static/img/icon-infohub.png">
<title>Information-hub</title>
<!-- Bootstrap core CSS -->
<link href="../../assets/bootstrap.3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="../../assets/font-awesome.4.6.1/css/font-awesome.min.css" rel="stylesheet">
<link href="../../assets/css/animate.min.css" rel="stylesheet">
<link href="../../assets/css/timeline.css" rel="stylesheet">
<link href="../../assets/css/cover.css" rel="stylesheet">
<link href="../../assets/css/forms.css" rel="stylesheet">
<link href="../../assets/css/buttons.css" rel="stylesheet">
<link href="../../assets/css/jobpost.css" rel="stylesheet">

<script src="../../assets/js/jquery.1.11.1.min.js"></script>
<script src="../../assets/bootstrap.3.3.6/js/bootstrap.min.js"></script>

    <script src="../../assets/js/custom.js"></script>

    <style>
    #details_btn:hover {
        background: #0080ff;
        color: white;

    }
    </style>

</head>

<body>

    <!-- Fixed navbar -->
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
                    <li><a href="../employer-home.php">Home</a></li>
                    <li><a href="./post.php">Create New Job</a></li>
                    <li><a href="./employer-jobs.php">view Jobs</a></li>
                    <li class="right">
                        <a href="../backend/api/user/auth/logout.php" style="color:blue">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Begin page content -->
    <div class="container-fluid page-content">
        <div class="row">
            <!-- Left Sidebar -->
            <div class="col-md-3">
                <!-- <div class="row" style="max-width: 80%; background-color: white;margin-left: 10%;">
                    <div class="row" style="margin-left: 10%">
                        <div class="col-md-10">
                            <div class="title">
                                <h3 class="text-primary">Job Category</h3>
                            </div>
                            <hr>
                        </div>
                        <div class="col-md-10">
                            <h5>Web Developer</h5>
                            <div class="checkbox">
                                <label>
                                    <label>
                                        <input class="checkbox-slider yesno" type="checkbox">
                                        <span class="text"> </span>
                                    </label>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <h5>Android Developer</h5>
                            <div class="checkbox">
                                <label>
                                    <input class="checkbox-slider yesno" type="checkbox">
                                    <span class="text"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <h5>Web Developer</h5>
                            <div class="checkbox">
                                <label>
                                    <input class="checkbox-slider yesno" type="checkbox">
                                    <span class="text"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <h5>Web Developer</h5>
                            <div class="checkbox">
                                <label>
                                    <input class="checkbox-slider yesno" type="checkbox">
                                    <span class="text"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-left: 10%">
                        <div class="col-md-10">
                            <div class="title">
                                <h3 class="text-primary">Location</h3>
                            </div>
                            <hr>
                        </div>
                        <div class="col-md-10">
                            <h5>Dhaka</h5>
                            <div class="checkbox">
                                <label>
                                    <label>
                                        <input class="checkbox-slider yesno" type="checkbox">
                                        <span class="text"> </span>
                                    </label>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <h5>Rangpur</h5>
                            <div class="checkbox">
                                <label>
                                    <input class="checkbox-slider yesno" type="checkbox">
                                    <span class="text"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <h5>Sylhet</h5>
                            <div class="checkbox">
                                <label>
                                    <input class="checkbox-slider yesno" type="checkbox">
                                    <span class="text"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <h5>Chitagong</h5>
                            <div class="checkbox">
                                <label>
                                    <input class="checkbox-slider yesno" type="checkbox">
                                    <span class="text"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- Middle Part -->
            <div class="col-md-6">
                <!-- Searching -->
                <div class="directory-info-row">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-group">
                                <span class="input-icon inverted">
                                    <input class="form-control input-sm" type="text">
                                    <i class="glyphicon glyphicon-search bg-blue"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Posts start -->

                <?php foreach ($publishedJobs['data'] as $jobs) { ?>


                <div style="background-color: white; border-radius: 10px;
            margin-bottom: 10px;">
                    <div class="row">
                        <!-- logo column -->
                        <div class="col-md-4 col-sm-3 col-xs-12" style="padding: 20px;">
                        <?php echo '<img height="110px" width="160px" alt="Company Logo" src="data:image ; base64 , '.$jobs['company_logo'].' "/> ';?>
                           
                        </div>
                        <!-- Title column -->
                        <div class="col-md-8 pull-left text-info" style="padding-left:1%;">
                            <div>
                                <h3><?php echo $jobs['job_title'] ?></h3>
                                
                                <h5><span class="text-capitalize"><?php echo $jobs['company_name'] ?></span></h5>
                                <h6> <?php echo $jobs['company_location'] ?></h6>
                            </div>


                            <div class="row" style="padding: 10px; ">

                                <?php 
                                 $skills = $jobs['skills']; 
                                    $i = 1;
                                    foreach ($skills as $value) {
                                        if($i==8)break;
                                        echo "<span style=\"font-size:16px ; padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px;margin-right:5px;margin-top:5px\" class=\"badge \"> ".$value."</span>\n";
                                        $i =$i+1;
                                
                                    }
                        
                                 ?>

                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="com-md-6 pull-right" style="padding-right:5%;
                padding-bottom: 20px">
                            <?php echo "<a href=\"./job-apply-list.php?id=$jobs[job_id]&userId=$_SESSION[user_login_uid] \" target=\"_blank\" id=\"details_btn\" class=\"btn btn-sm btn-secondery\">See Applied List</a>" ?>
                        </div>
                    </div>
                </div>
                <?php } // foreach ($publishedJobs as $jobs) ?>
            </div>

            <!-- Posts end -->

            <!-- Right Sidebar -->
            <div class="col-md-3">
                <!-- <h1>Today Apply jobs</h1>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe fugit
                aperiam debitis accusantium numquam, vero veritatis officiis velit, ea
                rem praesentium non sunt illum? Beatae eos totam suscipit distinctio,
                rerum! -->
            </div>
        </div>



    </div>

    <footer class="footer">
        <div class="container">
            <p class="text-muted"> Copyright &copy; Information Hub - All rights
                reserved </p>
        </div>
    </footer>

</body>



</html>