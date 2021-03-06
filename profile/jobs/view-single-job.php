<?php

      
    session_start();
    if(!$_SESSION['valid'] && !$_SESSION['type'] == "user"){
        session_destroy();
        header("Location:http://localhost/information_hub/index.php");
      }
    if(!isset($_GET['id'])){
        exit();
    }

    $job_id = $_GET['id'];
    $user_id = $_GET['userId'];
   

    include_once('../../backend/config/Database.php');
    include_once('../../backend/models/Job.php');  

    $database = new Database();

    $db = $database->connect();

    $job = new Job($db);

    include '../../backend/api/user/job/get_job.php';

    $publishedJob = getSingleJob($job , $job_id);

    
    $job = json_decode($publishedJob, true);
    
    $skills = $job['skills']; 

    $skillListwithComma = implode(", ", $skills);

    $phpdate = strtotime( $job['deadline']  );
    $deadline = date("d/m/Y", $phpdate );


    
?>


<head>

    <?php include('../job-includes/job-header.php') ?>


    <style>
    .hover-effect:hover {
        background-color: #2dc3e8;
        color: blue;
    }
    </style>
</head>

<body style="background-color:white ">



    <!-- Begin page content -->


    <div class="container " style="background-color:white ">
        <div class="row " style="margin-top:15px;padding-left:10px;padding-right:10px"">
        <div class="col-md-2"></div>
            <div class=" col-md-6">

            <center>
                <div>
                <?php echo '<img style="border-radius: 5%; max-height:
                  100px; max-width: 100px;" alt="Company Logo" src="data:image ; base64 , '.$job['company_logo'].' "/> ';?>
                   
                    <h2><?php echo $job['job_title'] ; ?></h2>
                    <h3><?php echo $job['company_name'] ; ?></h3>
                    <a href="<?php echo $job['company_website']; ?>">
                        <?php echo $job['company_website']; ?>
                    </a>

                    <p><?php echo $job['company_location'] ;?></p>
                    <hr>
                </div>
            </center>

        </div>
        <div class="col-md-2 " style="margin-top:40px">
            <h4 class="text-info bg-success " style="padding:5px;">Last Apply Date <span> <strong>
                        <center> <?php echo $deadline ?>
                </span></strong></center>
            </h4>
        </div>
    </div>
    <div class="row">

        <div class="col-md-5 col-md-offset-1">
            <table class="table" style="font-size: 22px;">

                <tr>
                    <td>Work From: </td>
                    <td><?php echo $job['remote_work']==0?"Office":"Remote Job" ?></td>
                </tr>
                <tr>
                    <td>Job Type : </td>
                    <td><?php echo $job['job_type'] ; ?></td>
                </tr>
                <tr>
                    <td>Compensation: </td>
                    <td><?php echo $job['compensation'] ; ?></td>
                </tr>
                <tr>
                    <td>Salary: </td>
                    <td><?php echo $job['min_salary'] ." - ".$job['max_salary'] ; ?> </td>
                </tr>
                <tr>
                    <td>Required Skills: </td>
                    <td> <?php echo $skillListwithComma ; ?> </td>
                </tr>
            </table>
        </div>

        <div class="col-md-6 lead">
            <?php echo $job['job_description']; ?>
        </div>


    </div>


    <div class="row" style="margin-top: 10px;margin-bottom: 40px;">
        <div class="col-md-4">
        </div>
        <div class="col-md-5">
        <div>
                <center>
                    <h3 id="applySuccess" class="text-info"></h3>
                    <h3 id="applyError" class="text-danger"></h3>
                </center>
            </div>
        </div>
        <div class="col-md-3 ">
            
            <input type="text" id='applicantId' value="<?php echo $user_id ; ?>" hidden>
            <input type="text" id='jobId' value="<?php echo $job_id ; ?>" hidden>
            <button type="button" id="applyBtn" class=" hover-effect btn btn-success btn-lg "><i class="fa
                  fa-check" ></i> Apply Job</button>
        </div>



    </div>



    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>

    <script src="../../ajax/job-post/apply-job-post.js"></script>
</body>

<!-- Mirrored from demos.bootdey.com/dayday/sidebar_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jan 2019 17:35:42 GMT -->

</html>