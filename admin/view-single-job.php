<?php

      
    session_start();
    if(!$_SESSION['valid'] && !$_SESSION['employer'] == "user"){
        session_destroy();
        header("Location:http://localhost/information_hub/index.php");
      }
    if(!isset($_GET['id'])){
        exit();
    }

    $job_id = $_GET['id'];

   

    include_once('../backend/config/Database.php');
    include_once('../backend/models/Job.php');  

    $database = new Database();

    $db = $database->connect();

    $job = new Job($db);

    include '../backend/api/user/job/get_job.php';

    $publishedJob = getSingleJob($job , $job_id);

    
    $job = json_decode($publishedJob, true);
    
    $skills = $job['skills']; 

    $skillListwithComma = implode(", ", $skills);

    $phpdate = strtotime( $job['deadline']  );
    $deadline = date("d/m/Y", $phpdate );


    
?>


<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from demos.bootdey.com/dayday/sidebar_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jan 2019 17:35:41 GMT -->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="../assets/static/img/icon-infohub.png" />
    <title>Information HUb</title>
    <!-- Bootstrap core CSS -->
    <link href="../assets/bootstrap.3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/font-awesome.4.6.1/css/font-awesome.min.css" rel="stylesheet" />
    <link href="../assets/css/animate.min.css" rel="stylesheet" />
    <link href="../assets/css/timeline.css" rel="stylesheet" />
    <link href="../assets/css/cover.css" rel="stylesheet" />
    <link href="../assets/css/forms.css" rel="stylesheet" />
    <link href="../assets/css/buttons.css" rel="stylesheet" />
    <link href="../assets/css/sidebar_profile.css" rel="stylesheet" />
 
    <script src="../assets/js/jquery.1.11.1.min.js"></script>
    
    
    <script src="../assets/bootstrap.3.3.6/js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      .hover-effect:hover{
          background-color: #2dc3e8;
          color: white;
      }
    </style>
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-white navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index-2.html"><b>Information Hub - Admin Panel</b></a>
        </div>
      </div>
    </nav>
    <!-- Begin page content -->
    <div id="wrapper" class="wrapper-content">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav"  style="margin-top:40px;">
              <li class="" >
                    <a href="#" class="hover-effect">Home</a>
                </li>
                <li class="active" >
                    <a href="./job-post-status.php" class="hover-effect">Job Posts</a>
                </li>
                <li>
                    <a href="#" class="hover-effect">Users </a>
                </li>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">
              <div class="row">
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
                <div class="col-md-5">
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
               
                <div class="col-md-7 lead">
                <?php echo $job['job_description']; ?>
                </div>

              </div>

              <div class="row" style="margin-top: 15%;">
                <div class="col-md-4">
                 
                </div>
                <div class="col-md-4">
                <div>
                <center>
                    <h3 id="success" class="text-info"></h3>
                    <h3 id="error" class="text-danger"></h3>
                </center>
            </div>
                </div>
                <div class="col-md-4">

               
                 <input type="text" id='jobId' value="<?php echo $job_id ; ?>" hidden>
                   <button style="margin-right: 30px;" id="deleteBtn" type="button" class="btn btn-danger btn-lg"><i class="fa fa-trash"></i> Delete Job </button>
                  <button type="button" id="publishBtn" class="btn btn-success btn-lg"><i class="fa fa-check"></i> Publish Job</button>
                </div>

              </div>
              
            </div>
        </div>
        <footer class="footer">
          <div class="container">
            <p class="text-muted"> Copyright &copy; Company - All rights reserved </p>
          </div>
        </footer>
    </div>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
       <script src="../assets/js/admin-cart.js"></script>
       <script src="../ajax/admin/job-status.js"></script>
  </body>

<!-- Mirrored from demos.bootdey.com/dayday/sidebar_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jan 2019 17:35:42 GMT -->
</html>
