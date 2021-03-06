<?php 
    
    session_start();
    if(!$_SESSION['valid'] || $_SESSION['type'] == "employer"){
        session_destroy();
        header("Location:http://localhost/information_hub/index.php");
     }

    include_once('../../backend/config/Database.php');
    include_once('../../backend/models/Job.php');
    include('../../backend/models/filter-job.php');
    //include_once('../../backend/models/Employer.php');
   
    

    $database = new Database();

    $db = $database->connect();

    $job = new Job($db);
    //$employer = new Employer($db);
    $searcjob = new FilterJob($db);
      

    include '../../backend/api/user/job/get_job.php';
    include '../../backend/api/user/job/filter-job.php';
   // include '../../backend/api/user/job/employer.php';

    $allPublishedJobArray = getPublishedJobs($job);

    //$companyInfo = getAllCompanyInfo($employer, $_SESSION['user_login_uid']);


    $publishedJobs = json_decode($allPublishedJobArray, true);

    

  /*   print_r($p['data'][0]['programming_skills'][0]);
 */
    


?>



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
                <div class="row" style="max-width: 80%; background-color: white;margin-left: 10%;">
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

            <?php 
                //

             ?>
            <div class="col-md-6">
                <!-- Searching -->
                <div class="directory-info-row">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-group">
                                <span class="input-icon inverted">
                                    <form action="#" method="POST">
                                    <input class="form-control input-sm" name="searchtext" type="text" placeholder="c++">
                                    <br>
                                    <input style="margin-left:45%" type="submit" name="searchbtn" class="btn btn-sm btn-success" value="Search"><!-- <i class="glyphicon glyphicon-search bg-blue"> </i> -->
                                    </form>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Posts start -->

                <?php 
                    if(isset($_POST['searchbtn'])){

                            $posts = getFilteredposts($searcjob, $_POST['searchtext']);
                            $resultJobs = json_decode($posts, true);

                            // print_r($resultJobs);

                            foreach ($resultJobs as $result) {
                                # code...
                            
                            //===============================
                            ?>



                            <div style="background-color: white; border-radius: 10px;
                    margin-bottom: 10px;">
                            <div class="row">
                                <!-- logo column -->
                                <div class="col-md-4 col-sm-3 col-xs-12" style="padding: 20px;">
                                <?php echo '<img height="110px" width="160px" alt="Company Logo" src="data:image ; base64 , '.$result['company_logos'].' "/> ';?>
                                   
                                </div>
                                <!-- Title column -->
                                <div class="col-md-8 pull-left text-info" style="padding-left:1%;">
                                    <div>
                                        <h3><?php echo $result['job_title'] ?></h3>
                                        
                                        <h5><span class="text-capitalize"><?php echo $result['company_name'] ?></span></h5>
                                        <h6> <?php echo $result['company_location'] ?></h6>
                                    </div>


                                    <div class="row" style="padding: 10px; ">

                                        <?php 
                                         $skills = json_decode($result['skills']); 
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
                                    <?php echo "<a href=\"./view-single-job.php?id=$result[job_id]&userId=$_SESSION[user_login_uid] \" target=\"_blank\" id=\"details_btn\" class=\"btn btn-sm btn-secondery\">Details</a>" ?>
                                </div>
                            </div>
                        </div>

                





                        <?php
                                }


                            // ===============================

        
                    }else{



                        foreach ($publishedJobs['data'] as $jobs) { ?>


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
                                    <?php echo "<a href=\"./view-single-job.php?id=$jobs[job_id]&userId=$_SESSION[user_login_uid] \" target=\"_blank\" id=\"details_btn\" class=\"btn btn-sm btn-secondery\">Details</a>" ?>
                                </div>
                            </div>
                        </div>
                        <?php }   }
 // foreach ($publishedJobs as $jobs) ?>
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



</html>