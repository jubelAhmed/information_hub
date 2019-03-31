<?php 
  session_start();
  if(!$_SESSION['valid'] || $_SESSION['type'] == "employer"){
    session_destroy();
    header("Location:http://localhost/information_hub/index.php");
  }
// include_once('../backend/config/Database.php');
// include_once('../backend/models/getPost.php');

// $database = new Database();

// $db = $database->connect();

// $getPost = new GetPost($db);
// $user_id = $_SESSION['user_login_uid'];  
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from demos.bootdey.com/dayday/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jan 2019 17:35:14 GMT -->

<head>

    <?php  
      include('../includes/header.php');
    
    ?>

    <!-- star -->
    <link rel="stylesheet" href="../assets/css/star.css">
    <script src="../assets/js/star.js"></script>

    <!-- multiple selcet  start linkup -->
    <!-- Latest compiled and minified CSS -->
    <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <!-- multiple selcet end -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    ul#catagoryList li {
        display: inline;
        color: #189fd4;
        font-weight: bold
    }

    ul#catagoryList li:before {
        content: "• ";
        padding-left: 5px;
        color: green;
    }

    ul#catagoryList li:nth-child(1):before {
        color: green;
    }

    ul#catagoryList li:nth-child(2):before {
        color: red;
    }
    </style>
</head>

<body class="animated fadeIn">
    <!-- Fixed navbar -->
    <?php 
        include("../includes/navbar.php")
      ?>
    <!-- Fixed navbar -->

    <div style="margin-top:71px">
        <div class="panel " styele="background:white">



            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6  m-a-2" style="font-size:18px;color:#2DC3E8">
                        <strong> Filter  </strong>
                    </div>
                    <div class="col-md-6 text-right">
                        <a class=" bg-white" style="text-decoration:none;background:white;  color:#2DC3E8"
                            data-toggle="collapse" href="#filterPanel" aria-expanded="false" aria-controls="filterTab">
                           
                            <span style="margin-right:5%;"><i class="fa fa-braille fa-2x" ></i> </span>
                        </a>
                    </div>
                </div>
            </div>


            <div id="filterPanel" class="panel-collapse collapse" role="tabpanel" style="border-top:1px solid #2DC3E8"
                aria-labelledby="filterTab">
                <div class="panel-body text-info">
                    <div class="row" style="padding-top:10px">
                        <div class="col-md-1"> Filter Option</div>
                        <div class="col-md-10">
                            <div class="has-success" style="margin-bottom: 15px">
                                <select class="form-control js-example-responsive" multiple="multiple" 
                                    style="width: 100% ;" placeholder="Select">
                                   
                                    <optgroup label="Date">
                                        <option>Today</option>
                                        <option>Yesterday</option>  
                                        <option>More Days Ago</option>  
                                    </optgroup>
                                    <optgroup label="Reviews">
                                        <option>Top Rated</option>
                                        <option>Most Views</option>  
                                        
                                    </optgroup>
                                    <optgroup label="Programming Language">
                                        <option>Java</option>
                                        <option>C</option>
                                        <option>javascript</option>
                                        <option>c#</option>
                                        <option>.net</option>
                                    </optgroup>
                                    <optgroup label="Development">
                                        <option>Web</option>
                                        <option>Desktop</option>
                                        <option>Android</option>
                                        <option>Robotics</option>
                                    </optgroup>
                                    <optgroup label="Javascript Framework">
                                        <option>jQuery</option>
                                        <option>AngularJs</option>
                                        <option>ReactJS</option>
                                        <option>ViewJs</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-1"></div>

                        
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!--  -->



    <!-- Begin page content -->
    <div class="container">
        <div class="row">
            <!-- left links -->
            <div class="col-md-3">
                <div class="profile-nav">
                    <div class="widget">
                        <div class="widget-body">
                            <div class="user-heading round">
                                <a href="#">
                                    <img src="../assets/static/img/info-white.jpg" class="rounded-circle" width="180px"
                                        height="180px" alt="jubel ahmed" />
                                </a>
                                <h1>Jubel Ahmed</h1>
                                <p>@username</p>
                            </div>
                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-envelope"></i> Messages
                                        <span class="label label-info pull-right r-activity">9</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-calendar"></i> Events</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-image"></i> Photos</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-floppy-o"></i> Saved</a>
                                </li>
                                <li>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end left links -->

            <!-- center posts -->
            <div class="col-md-6 bg-white">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel " styele="background:white">

                            <div>
                                <a class=" bg-white" style="text-decoration:none;background:white;  color:#2DC3E8"
                                    data-toggle="collapse" href="#postPanel" aria-expanded="false"
                                    aria-controls="answerOne">
                                    <div class="panel-heading">
                                        <center> <strong>CREATE POST</strong></center>
                                    </div>
                                </a>
                            </div>


                            <div id="postPanel" class="panel-collapse collapse" role="tabpanel"
                                style="border-top:1px solid gray" aria-labelledby="questionOne">
                                <div class="panel-body">
                                    <div class="box profile-info n-border-top">
                                        <div style="padding: 15px">
                                            <div class="title-info has-success"
                                                style="border: 1px solid #ccccb3;margin-bottom: 15px">
                                                <input class="form-control input-bg p-text-area" id="postTile"
                                                    type="text" placeholder="Title" style="font-size:20px" />
                                                <input type="hidden" id="userid" value="<?php echo $_SESSION['user_login_uid']; ?>">
                                            </div>
                                            <div class="has-success" style="margin-bottom: 15px">
                                                <select class="form-control js-example-responsive" id="postCatagories" multiple="multiple"
                                                    style="width: 100% ;">
                                                    <optgroup label="Programming Language">
                                                        <option>Java</option>
                                                        <option>C</option>
                                                        <option>javascript</option>
                                                        <option>c#</option>
                                                        <option>.net</option>
                                                    </optgroup>
                                                    <optgroup label="Development">
                                                        <option>Web</option>
                                                        <option>Desktop</option>
                                                        <option>Android</option>
                                                        <option>Robotics</option>
                                                    </optgroup>
                                                    <optgroup label="Javascript Framework">
                                                        <option>jQuery</option>
                                                        <option>AngularJs</option>
                                                        <option>ReactJS</option>
                                                        <option>ViewJs</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="has-success"
                                                style="margin-bottom:15px;border: 1px solid #ccccb3;">
                                                <textarea class="form-control input-lg p-text-area" id="postDetails" rows="4"
                                                    placeholder="Write details"></textarea>
                                            </div>
                                        </div>
                                        <div class="box-footer box-form">

                                            <button class="btn btn-azure pull-right" id="publishPostBtn" type="button"><span id="showPublish">Publish</span><img id="loadingPublishBtn" src="https://loading.io/spinners/comets/lg.comet-spinner.gif" style="max-height: 20px; max-width: 20px;" alt=""></button>
                                            <ul class="nav nav-pills">
                                                <li><a href="#"><i class="fa fa-camera"></i></a></li>
                                                <li><a href="#"><i class="fa fa-film"></i></a></li>
                                                <li><a href="#"><i class="fa fa-microphone"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
<div class="row">
<div class="col-md-12">
    <!-- post start -->

<div class="box box-widget">
        <div class="box-header with-border">
            <div class="row">
                <div class="col-md-6">
                    <div class="user-block">
                        <img class="img-circle" alt="User Image" src="../assets/static/img/dark-blue.png">
                        <span class="username"><a href="#">Jubel Ahmedx</a></span>
                        <span class="description">7:30 PM Today</span>
                    </div>
                </div>
                <div class="col-md-6">

                    <ul id="catagoryList">
                        <li>JavaScript</li>
                        <li>ReactJs</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="box-body">
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at</p>
            <p>the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

            <div class="attachment-block clearfix">
                <img class="attachment-img show-in-modal" alt="Attachment Image" src="../assets/static/img/dark-blue.png">
                <div class="attachment-pushed">
                    <h4 class="attachment-heading"><a href="http://www.bootdey.com/">Lorem
                                                ipsum
                                                text
                                                generator</a></h4>
                    <div class="attachment-text">
                        Description about the attachment can be placed here. Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-left:2px;margin-top:25px;
                    margin-right:2px;
                    border-bottom:1px solid #c9b7b7">
                <div class="col-md-4 col-sm-2 ">
                    <div class='rating-stars text-center'>
                        <ul id='stars'>
                            <li class='star' title='Poor' data-value='1'>
                                <i class='fa fa-star fa-fw'></i>
                            </li>
                            <li class='star' title='Fair' data-value='2'>
                                <i class='fa fa-star fa-fw'></i>
                            </li>
                            <li class='star' title='Good' data-value='3'>
                                <i class='fa fa-star fa-fw'></i>
                            </li>
                            <li class='star' title='Excellent' data-value='4'>
                                <i class='fa fa-star fa-fw'></i>
                            </li>
                            <li class='star' title='WOW!!!' data-value='5'>
                                <i class='fa fa-star fa-fw'></i>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-1 col-sm-1 "></div>
                <div class="col-md-2 col-sm-2 ">
                    <span class="text-info">80 point </span>
                </div>
                <div class="col-md-3 col-sm-3 ">
                    <span class="text-info">5 comments</span>
                </div>
                <div class="col-md-2 col-sm-2 " style="float:right">
                    <button class="btn btn-info btn-xs" type="button"><i class="fa fa-share"></i> share
                    </button>
                </div>
            </div>

        </div>
        <div class="box-footer box-comments">
            <div class="box-comment">
                <img class="img-circle img-sm" alt="User Image" src="../assets/static/img/dark-blue.png">
                <div class="comment-text">
                    <span class="username">
                                            Maria Gonzales
                                            <span class="text-muted pull-right">8:03 PM Today</span>
                    </span>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                </div>
            </div>
            <div class="box-comment">
                <img class="img-circle img-sm" alt="User Image" src="../assets/static/img/dark-blue.png">
                <div class="comment-text">
                    <span class="username">
                                            Nora Havisham
                                            <span class="text-muted pull-right">8:03 PM Today</span>
                    </span>
                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                </div>
            </div>
        </div>
        <div class="box-footer">
            <form action="#" method="post">
                <img class="img-responsive img-circle img-sm" alt="Alt Text" src="../assets/static/img/dark-blue.png">
                <div class="img-push">
                    <input class="form-control input-sm" type="text" placeholder="Press enter to post comment">
                </div>
            </form>
        </div>
    </div>

 
    <!-- End Post -->
</div>
                </div>

            </div>
            <!-- end  center posts -->

            <div class="col-md-3">
                <!-- Friends activity -->
                <div class="widget">
                    <div class="widget-header">
                        <h3 class="widget-caption">Top Rated List</h3>
                    </div>
                    <div class="widget-body bordered-top bordered-sky">
                        <div class="card">
                            <div class="content">
                                <ul class="list-unstyled team-members">
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3 col-md-3">
                                                <div class="avatar">
                                                    <img src="../assets/static/img/dark-blue.png" class="rounded-circle"
                                                        width="130px" height="130px" alt="jubel ahmed" />
                                                </div>
                                            </div>
                                            <div class="col-xs-9 col-md-9">
                                                <div><b><a href="#">wridoy</a></b></div>
                                                <div class="text-info"> Total Point <b><span>500
                                                        </span></b></div>
                                                <div class="text-info"> Total Post <b><span>10</span></b>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3 col-md-3">
                                                <div class="avatar">
                                                    <img src="../assets/static/img/dark-blue.png" class="rounded-circle"
                                                        width="130px" height="130px" alt="jubel ahmed" />
                                                </div>
                                            </div>
                                            <div class="col-xs-9 col-md-9">
                                                <div><b><a href="#">Himel Rana</a></b></div>
                                                <div class="text-info"> Total Point <b><span>500
                                                        </span></b></div>
                                                <div class="text-info"> Total Post <b><span>10</span></b>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- End Friends activity -->

                <!-- People You May Know -->
                <div class="widget">
                    <div class="widget-header">
                        <h3 class="widget-caption">People You May Know</h3>
                    </div>
                    <div class="widget-body bordered-top bordered-sky">
                        <div class="card">
                            <div class="content">
                                <ul class="list-unstyled team-members">
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <div class="avatar">
                                                    <img src="../assets/static/img/dark-blue.png" class="rounded-circle"
                                                        width="180px" height="180px" alt="jubel ahmed" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                jubel ahmed
                                            </div>

                                            <div class="col-xs-3 text-right">
                                                <btn class="btn btn-sm btn-azure btn-icon"><i class="fa fa-heart-o"
                                                        style="padding-left: 3px"></i>
                                                </btn>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <div class="avatar">
                                                    <img src="../assets/static/img/dark-blue.png" class="rounded-circle"
                                                        width="180px" height="180px" alt="jubel ahmed" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                jubel ahmed
                                            </div>

                                            <div class="col-xs-3 text-right">
                                                <btn class="btn btn-sm btn-azure btn-icon"><i class="fa fa-heart-o"
                                                        style="padding-left: 3px"></i>
                                                </btn>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- End people yout may know -->
            </div>

        </div>
    </div>

    <!-- footer  with script and style-->


    <?php
     /*  include("../includes/footer.php"); */
    ?>

    */

    <script>
    $(".js-example-responsive").select2({
        width: "resolve",
        placeholder: "Select catagories" // need to override the changed default
    });
    </script>
    <script src="../assets/js/post.js"></script>
    <script src="../ajax/own-post/home-post.js"></script>
</body>



</html>