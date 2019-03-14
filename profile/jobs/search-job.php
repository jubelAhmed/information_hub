<?php 
    
    session_start();
    if(!$_SESSION['valid']){
      session_destroy();
      header("Location:http://localhost/information_hub/index.php");
    }

    include_once('../../backend/config/Database.php');
    include_once('../../backend/models/Job.php');

    $database = new Database();

    $db = $database->connect();

    $job = new Job($db);

    include '../../backend/api/user/job/get_job.php';

    $allPublishedJobArray = getPublishedJobs($job);

    
    $publishedJobs = json_decode($allPublishedJobArray, true);

    

  /*   print_r($p['data'][0]['programming_skills'][0]);
 */
    


?>




<!-- Mirrored from demos.bootdey.com/dayday/people_directory.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jan 2019 17:36:03 GMT -->

<head>

    <?php include('../job-includes/job-header.php') ?>
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
    <?php include('../job-includes/job-navbar.php') ?>

    <!-- Begin page content -->
    <div class="container-fluid page-content">
        <div class="row">
            <!-- Left Sidebar -->
            <div class="col-md-3">
                <div class="row" style="max-width: 80%; background-color: white;
            margin-left: 10%;">
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
                </div>
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


                <div class="row" style="background-color: white; border-radius: 10px;
            margin-bottom: 10px;">
                    <div class="row">
                        <!-- logo column -->
                        <div class="col-md-4 col-sm-3 col-xs-12" style="padding: 20px;">
                            <img src=" http://saayc.co.za/wp-content/uploads/2017/02/INFORMATION-HUB-01.jpg"
                                width="160px" height="70px" alt="Company Logo">
                        </div>
                        <!-- Title column -->
                        <div class="com-md-5 pull-left" style="padding-left:1%;">
                            <h3><?php echo $jobs['job_title'] ?>
                                <span class="text-muted small "></span>
                                <br><span class="text-capitalize"><small><?php echo $jobs['company_name'] ?><br>
                                        <?php echo $jobs['company_location'] ?></small></span></h3>

                        </div>
                    </div>
                    <center>
                        <div class="row" style="padding: 10px; margin-left: 10px;">

                            <?php 
                        $skills = array_merge($jobs['programming_skills'],$jobs['design_skills'],$jobs['other_skills'],$jobs['special_skills']); 

                        foreach ($skills as $value) {
                            echo "<span style=\"font-size:16px ; padding:5px;\" class=\"badge \"> ".$value."</span>\n";
                    
                        }
                    
                    ?>
                            <!--  <span class="badge">Java</span>
                    <span class="badge">C++</span>
                    <span class="badge">Grapics Design</span>
                    <span class="badge">Front End Developer</span>
                    <span class="badge">Python</span>
                    <span class="badge">C++</span>
                    <span class="badge">Grapics Design</span>
                    <span class="badge">Front End Developer</span>
                    <span class="badge">Python</span> -->
                        </div>
                    </center>
                    <div class="row">
                        <div class="com-md-6 pull-right" style="padding-right:5%;
                padding-bottom: 20px">
                            <?php echo "<a href=\"./view-single-job.php?id=$jobs[job_id]\" target=\"_blank\" id=\"details_btn\" class=\"btn btn-sm btn-secondery\">Details</a>" ?>
                        </div>
                    </div>
                </div>
                <?php } // foreach ($publishedJobs as $jobs) ?>
            </div>

            <!-- Posts end -->

            <!-- Right Sidebar -->
            <div class="col-md-3">
                <h1>Today Apply jobs</h1>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe fugit
                aperiam debitis accusantium numquam, vero veritatis officiis velit, ea
                rem praesentium non sunt illum? Beatae eos totam suscipit distinctio,
                rerum!
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

<!-- Mirrored from demos.bootdey.com/dayday/people_directory.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jan 2019 17:36:03 GMT -->

</html>