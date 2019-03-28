
<?php 
  session_start();
  if(!$_SESSION['valid'] && !$_SESSION['type'] == "employer"){
    session_destroy();
    header("Location:http://localhost/information_hub/index.php");
  }

  
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
                <li><a href="../profile/home.php">Home</a></li>
                <li><a href="../profile/jobs/post.php">Create New Job</a></li>
                <li><a href="../profile/jobs/search-job.php">Search Jobs</a></li>
                <li class="right">
                    <a href="../backend/api/user/auth/logout.php" style="color:blue">Log Out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div>
    <p>page desing in working mode</p>
</div>
    
<footer class="footer">
    <div class="container">
        <p class="text-muted text-center">Copyright &copy; information hub - all rights reserved</p>
    </div>
</footer>

</body>
</html>