<?php

      
    session_start();
    if(!$_SESSION['valid']){
    session_destroy();
    header("Location:http://localhost/information_hub/index.php");
    }
    if(!isset($_GET['id'])){
        exit();
    }

    $job_id = $_GET['id'];

    include_once('../../backend/config/Database.php');
    include_once('../../backend/models/Job.php');  

    $database = new Database();

    $db = $database->connect();

    $job = new Job($db);

    include '../../backend/api/user/job/get_job.php';

    $publishedJob = getSingleJob($job , $job_id);

    
    $job = json_decode($publishedJob, true);
    
    $skills = array_merge($job['programming_skills'],$job['design_skills'],$job['other_skills'],$job['special_skills']); 

    $skillListwithComma = implode(", ", $skills);

    $phpdate = strtotime( $job['deadline']  );
    $deadline = date("d/m/y", $phpdate );


    
?>


<head>

    <?php include('../job-includes/job-header.php') ?>
    <script src="../../assets/js/custom.js"></script>

    <style>
    .hover-effect:hover {
        background-color: #2dc3e8;
        color: blue;
    }
    </style>
</head>

<body class="bg-danger">



    <!-- Begin page content -->


    <div class="container ">
        <div class="row " style="margin-top:10px;">
            <div class="col-md-10">

                <center>
                    <div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1200px-Google_2015_logo.svg.png"
                            alt="Company Logo" style="border-radius: 5%; max-height:
                  100px; max-width: 100px;">
                        <h2><?php echo $job['job_title'] ; ?></h2>
                        <h3><?php echo $job['company_name'] ; ?></h3>
                        <p><?php echo $job['company_location'] ;?></p>
                        <hr>
                    </div>
                </center>

            </div>
            <div class="col-md-2">
                <h4 class="text-info">Last Apply Date : <span> <strong>
                            <center> <?php echo $deadline ?>
                    </span></strong></center>
                </h4>
            </div>
        </div>
        <div class="row">

            <div class="col-md-5">
                <table class="table" style="font-size: 22px;">

                    <tr>
                        <td>Work From: </td>
                        <td><?php echo $job['work_type']==0?"Office":"Remote Job" ?></td>
                    </tr>
                    <tr>
                        <td>Job Type : </td>
                        <td><?php echo $job['job_type'] ; ?></td>
                    </tr>
                    <tr>
                        <td>Compensation: </td>
                        <td><?php echo $job['salary_type'] ; ?></td>
                    </tr>
                    <tr>
                        <td>Salary: </td>
                        <td><?php echo $job['min_salary'] ." - ".$job['max_salary'] ; ?> </td>
                    </tr>
                    <tr>
                        <td>Require Skills: </td>
                        <td> <?php echo $skillListwithComma ; ?> </td>
                    </tr>
                </table>
            </div>

            <div class="col-md-7 lead">
                <?php echo $job['job_description']; ?>
            </div>


        </div>


        <div class="row" style="margin-top: 10px;margin-bottom: 40px;">
            <div class="col-md-4">
            </div>
            <div class="col-md-5"></div>
            <div class="col-md-3 ">
                <button type="button" class=" hover-effect btn btn-success btn-lg "><i class="fa
                  fa-check"></i> Apply Job</button>
            </div>

        </div>


    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
    <script src="../../assets/js/admin-cart.js"></script>
</body>

<!-- Mirrored from demos.bootdey.com/dayday/sidebar_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jan 2019 17:35:42 GMT -->

</html>