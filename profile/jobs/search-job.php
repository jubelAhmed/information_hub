<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.bootdey.com/dayday/people_directory.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jan 2019 17:36:03 GMT -->

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
    <script src="assets/js/custom.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-white navbar-fixed-top text-danger" style="">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index-2.html"><b>Information Hub</b></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="actives"><a href="profile.html">Profile</a></li>
                    <li><a href="../home.php">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">
                            Jobs <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="../jobs/post.php">Create New Job</a></li>
                            <li><a href="../jobs/search-job.php">Search Jobs</a></li>

                        </ul>
                    </li>
                    <li class="right "><a style="color:blue" href="../../backend/api/user/auth/logout.php">Log Out</a>
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
                <!-- Posts -->
                <div class="row" style="background-color: white; border-radius: 10px;
            margin-bottom: 10px;">
                    <div class="row">
                        <!-- logo column -->
                        <div class="col-md-4 col-sm-3 col-xs-12" style="padding: 20px;">
                            <img src="https://daffodilvarsity.edu.bd/images/logo.png" alt="Company Logo">
                        </div>
                        <!-- Title column -->
                        <div class="com-md-5 pull-left" style="padding-left:1%;">
                            <h3>Project Manager <span class="text-muted small"> </span><br><span><small>Google
                                        Inc <br> Dhanmondi Branch</small></span></h3>

                        </div>
                    </div>
                    <div class="row" style="padding: 10px; margin-left: 10px;">
                        <span class="badge">Java</span>
                        <span class="badge">C++</span>
                        <span class="badge">Grapics Design</span>
                        <span class="badge">Front End Developer</span>
                        <span class="badge">Python</span>
                        <span class="badge">C++</span>
                        <span class="badge">Grapics Design</span>
                        <span class="badge">Front End Developer</span>
                        <span class="badge">Python</span>
                    </div>
                    <div class="row">
                        <div class="com-md-6 pull-right" style="padding-right:5%;
                padding-bottom: 20px">
                            <a href="#" class="btn btn-sm btn-secondery">Details</a>
                        </div>
                    </div>
                </div>
                <!-- Post -->
                <div class="row" style="background-color: white; border-radius: 10px;
            margin-bottom: 10px;">
                    <div class="row">
                        <!-- logo column -->
                        <div class="col-md-4 col-sm-3 col-xs-12" style="padding: 20px;">
                            <img src="https://daffodilvarsity.edu.bd/images/logo.png" alt="Company Logo">
                        </div>
                        <!-- Title column -->
                        <div class="com-md-5 pull-left" style="padding-left:1%;">
                            <h3>Project Manager <span class="text-muted small"> </span><br><span><small>Google
                                        Inc <br> Dhanmondi Branch</small></span></h3>

                        </div>
                    </div>
                    <div class="row" style="padding: 10px; margin-left: 10px;">
                        <span class="badge">Java</span>
                        <span class="badge">C++</span>
                        <span class="badge">Grapics Design</span>
                        <span class="badge">Front End Developer</span>
                        <span class="badge">Python</span>
                        <span class="badge">C++</span>
                        <span class="badge">Grapics Design</span>
                        <span class="badge">Front End Developer</span>
                        <span class="badge">Python</span>
                    </div>
                    <div class="row">
                        <div class="com-md-6 pull-right" style="padding-right:5%;
                padding-bottom: 20px">
                            <a href="#" class="btn btn-sm btn-secondery">Details</a>
                        </div>
                    </div>
                </div>
                <!-- Post -->
                <div class="row" style="background-color: white; border-radius: 10px;
            margin-bottom: 10px;">
                    <div class="row">
                        <!-- logo column -->
                        <div class="col-md-4 col-sm-3 col-xs-12" style="padding: 20px;">
                            <img src="https://daffodilvarsity.edu.bd/images/logo.png" alt="Company Logo">
                        </div>
                        <!-- Title column -->
                        <div class="com-md-5 pull-left" style="padding-left:1%;">
                            <h3>Project Manager <span class="text-muted small"> </span><br><span><small>Google
                                        Inc <br> Dhanmondi Branch</small></span></h3>

                        </div>
                    </div>
                    <div class="row" style="padding: 10px; margin-left: 10px;">
                        <span class="badge">Java</span>
                        <span class="badge">C++</span>
                        <span class="badge">Grapics Design</span>
                        <span class="badge">Front End Developer</span>
                        <span class="badge">Python</span>
                        <span class="badge">C++</span>
                        <span class="badge">Grapics Design</span>
                        <span class="badge">Front End Developer</span>
                        <span class="badge">Python</span>
                    </div>
                    <div class="row">
                        <div class="com-md-6 pull-right" style="padding-right:5%;
                padding-bottom: 20px">
                            <a href="#" class="btn btn-sm btn-secondery">Details</a>
                        </div>
                    </div>
                </div>

                <!-- Post -->
                <div class="row" style="background-color: white; border-radius: 10px;
            margin-bottom: 10px;">
                    <div class="row">
                        <!-- logo column -->
                        <div class="col-md-4 col-sm-3 col-xs-12" style="padding: 20px;">
                            <img src="https://daffodilvarsity.edu.bd/images/logo.png" alt="Company Logo">
                        </div>
                        <!-- Title column -->
                        <div class="com-md-5 pull-left" style="padding-left:1%;">
                            <h3>Project Manager <span class="text-muted small"> </span><br><span><small>Google
                                        Inc <br> Dhanmondi Branch</small></span></h3>

                        </div>
                    </div>
                    <div class="row" style="padding: 10px; margin-left: 10px;">
                        <span class="badge">Java</span>
                        <span class="badge">C++</span>
                        <span class="badge">Grapics Design</span>
                        <span class="badge">Front End Developer</span>
                        <span class="badge">Python</span>
                        <span class="badge">C++</span>
                        <span class="badge">Grapics Design</span>
                        <span class="badge">Front End Developer</span>
                        <span class="badge">Python</span>
                    </div>
                    <div class="row">
                        <div class="com-md-6 pull-right" style="padding-right:5%;
                padding-bottom: 20px">
                            <a href="#" class="btn btn-sm btn-secondery">Details</a>
                        </div>
                    </div>
                </div>

                <!-- Post -->
                <div class="row" style="background-color: white; border-radius: 10px;
            margin-bottom: 10px;">
                    <div class="row">
                        <!-- logo column -->
                        <div class="col-md-4 col-sm-3 col-xs-12" style="padding: 20px;">
                            <img src="https://daffodilvarsity.edu.bd/images/logo.png" alt="Company Logo">
                        </div>
                        <!-- Title column -->
                        <div class="com-md-5 pull-left" style="padding-left:1%;">
                            <h3>Project Manager <span class="text-muted small"> </span><br><span><small>Google
                                        Inc <br> Dhanmondi Branch</small></span></h3>

                        </div>
                    </div>
                    <div class="row" style="padding: 10px; margin-left: 10px;">
                        <span class="badge">Java</span>
                        <span class="badge">C++</span>
                        <span class="badge">Grapics Design</span>
                        <span class="badge">Front End Developer</span>
                        <span class="badge">Python</span>
                        <span class="badge">C++</span>
                        <span class="badge">Grapics Design</span>
                        <span class="badge">Front End Developer</span>
                        <span class="badge">Python</span>
                    </div>
                    <div class="row">
                        <div class="com-md-6 pull-right" style="padding-right:5%;
                padding-bottom: 20px">
                            <a href="#" class="btn btn-sm btn-secondery">Details</a>
                        </div>
                    </div>
                </div>


            </div>
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