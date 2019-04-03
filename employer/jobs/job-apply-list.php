<?php

      
    session_start();
    if(!$_SESSION['valid'] || $_SESSION['type'] == "user"){
        session_destroy();
        header("Location:http://localhost/information_hub/index.php");
      }
    if(!isset($_GET['id'])){
        exit();
    }
    if(!isset($_GET['userId'])){
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


    // applied users list

    include_once("../../backend/models/ApplyJob.php");
    include_once("../../backend/api/user/job/get_apply_job.php");

    $applyJob = new ApplyJob($db);

    $appliedUsers = getAppliedUserList($applyJob,$job_id);

    $appliedUsersList = json_decode($appliedUsers, true);

   

    
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
        <div class="row " style="margin-top:15px;padding-left:10px;padding-right:10px">

            <div class="col-md-2"></div>
            <div class=" col-md-6">

            <center>
                <div>
                <?php echo '<img style="border-radius: 5%; max-height:
                  100px; max-width: 100px;" class="thumbnail" alt="Company Logo" src="data:image ; base64 , '.$job['company_logo'].' "/> ';?>
                   
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

        <div class="col-md-5 lead">
            <?php echo $job['job_description']; ?>
        </div>


    </div>


    <div class="row" style="margin-top: 10px;margin-bottom: 40px; padding-bottom:10px;">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
        <div class="table-responsive" style="background-color:#D0D3D4">
                 
                 <table class="table user-list">
                   <thead style="color:#34495E">
                     <tr>
                       <th>User Name</th>
                       <th>email</th>
                       <th class="text-center">occupation</th>
                       <th>Apply Date</th>
                       <th>Action</th>
                     </tr>
                   </thead>
                   <tbody>
                   <?php foreach ($appliedUsersList['data'] as $user) { ?>
                     <tr>
                       <td>
                           <?php $name = $user["first_name"]." ".$user['last_name'] ?>
                           <span ><?php echo $name ?></span> 
                       </td>
                       <td>
                         <?php echo $user['email'] ?> 
                        </td>
                       <td class="text-center">
                           
                       <?php echo $user['occupation'] ?> 
                       </td>
                       <td>
                          
                         <?php
                        
                          $phpdate = strtotime( $user['apply_date'] );
                          $applyDate = date("d/m/Y", $phpdate );
                          echo $applyDate ;
                         ?>
                       </td>
                       <td style="width: 20%;">
                         <a  href="#" class="table-link success">
                           <span class="fa-stack">
                             <i class="fa fa-square fa-stack-2x"></i>
                             <i class="fa fa-eye fa-stack-1x fa-inverse"></i>
                           </span>
                         </a>
                         
                         <!-- <a href="#" class="table-link danger">
                           <span class="fa-stack">
                             <i class="fa fa-square fa-stack-2x"></i>
                             <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                           </span>
                         </a> -->
                       </td>
                     </tr>
                     <?php } // foreach ($jobs as $job) ?>
                   </tbody>
                 </table>
                
                 </div>
        </div>
        
        <div class="col-md-1 ">
            
          
        </div>



    </div>



    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>

    <script src="../../ajax/job-post/apply-job-post.js"></script>
</body>

<!-- Mirrored from demos.bootdey.com/dayday/sidebar_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jan 2019 17:35:42 GMT -->

</html>