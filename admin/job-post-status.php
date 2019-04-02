<?php 
    
    session_start();
    // if(!$_SESSION['valid'] && !$_SESSION['type'] == "user"){
    //     session_destroy();
    //     header("Location:http://localhost/information_hub/index.php");
    //   }

    include_once('../backend/config/Database.php');
    include_once('../backend/models/Job.php');
    //include_once('../../backend/models/Employer.php');
   
    

    $database = new Database();

    $db = $database->connect();

    $job = new Job($db);
    //$employer = new Employer($db);

    include '../backend/api/user/job/get_job.php';
   // include '../../backend/api/user/job/employer.php';

    $allJobArray = getAllJobs($job);
    //$companyInfo = getAllCompanyInfo($employer, $_SESSION['user_login_uid']);


    $jobs = json_decode($allJobArray, true);

    

  /*   print_r($p['data'][0]['programming_skills'][0]);
 */
    


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
<title>information-hub</title>
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
      .hover-effect:hover {
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
          <a class="navbar-brand" href="index-2.html"
            ><b>Information Hub - Admin Panel</b></a
          >
        </div>
      </div>
    </nav>

    <!-- Begin page content -->
    <div id="wrapper" class="wrapper-content">
      <div id="sidebar-wrapper">
        <ul class="sidebar-nav" style="margin-top:40px;">
          <li class="">
            <a href="dashboard.php" class="hover-effect">Home</a>
          </li>
          <li class="active">
            <a href="job-post-status.html" class="hover-effect">Job Posts</a>
          </li>
          <li>
            <a href="#" class="hover-effect">Users </a>
          </li>
        </ul>
      </div>
      <div id="page-content-wrapper">
        <div class="container-fluid">
          <h1 class="float-left">Job Posts</h1>
           
            <div class="row">
              <div class="col">
                <div class="widget">
                  <div style="margin-left: 40%; display: inline;">
                    <label>
                      <p>Pending Items</p>
                        <input class="checkbox-slider toggle colored-warning" type="checkbox">
                      <span class="text"></span>
                    </label>
                  </div>
                  <div style="margin-left: 5%; display: inline;">
                    <label>
                      <p>Published Items</p>
                      <input class="checkbox-slider toggle colored-success" type="checkbox">
                      <span class="text"></span>
                    </label>
                  </div>
                  <div class="table-responsive">
                 
                  <table class="table user-list">
                    <thead>
                      <tr>
                        <th>Company</th>
                        <th>Title</th>
                        <th class="text-center">Status</th>
                        <th>Created</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($jobs['data'] as $job) { ?>
                      <tr>
                        <td>
                        <?php echo '<img height="50px" width="50px" alt="Company Logo" src="data:image ; base64 , '.$job['company_logo'].' "/> ';?>
                          <a href="#" class="user" style="font-size:16px">
                          <?php echo $job['company_name'] ?>
                          </a>
                        </td>
                        <td>
                          <h4><?php echo $job['job_title'] ?> </h4>
                          </td>
                        <td class="text-center">
                          
                            <?php 
                              $status = $job["approve_status"];
                              if($status){
                                echo "<span class=\"label label-success\">Published</span>";
                              }else{
                                echo "<span class=\"label label-warning\">Pending</span>";;
                              }
                            ?>
                         
                        </td>
                        <td>
                          <?php
                           $phpdate = strtotime( $job['current_data']  );
                           $createDate = date("d/m/Y", $phpdate );
                           echo $createDate ;
                          ?>
                        </td>
                        <td style="width: 20%;">
                          <a  href="<?php echo "./view-single-job.php?id=$job[job_id]";?>" class="table-link success">
                            <span class="fa-stack">
                              <i class="fa fa-square fa-stack-2x"></i>
                              <i class="fa fa-eye fa-stack-1x fa-inverse"></i>
                            </span>
                          </a>
                          
                          <a href="#" class="table-link danger">
                            <span class="fa-stack">
                              <i class="fa fa-square fa-stack-2x"></i>
                              <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                            </span>
                          </a>
                        </td>
                      </tr>
                      <?php } // foreach ($jobs as $job) ?>
                    </tbody>
                  </table>
                 
                  </div>
                  <ul class="pagination pull-right">
                  <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                  </ul>
                  </div>
              </div>
  </div>
        </div>
    </div>
      <footer class="footer">
        <div class="container">
          <p class="text-muted">
            Copyright &copy; Information Hub - All rights reserved
          </p>
        </div>
      </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
    <script src="../assets/js/admin-cart.js"></script>
  </body>

  <!-- Mirrored from demos.bootdey.com/dayday/sidebar_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jan 2019 17:35:42 GMT -->
</html>
