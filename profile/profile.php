<?php 
  session_start();
  if(!$_SESSION['valid'] || $_SESSION['type'] == "employer"){
    session_destroy();
    header("Location:http://localhost/information_hub/index.php");
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <?php  
         include('../includes/header.php');
    ?>
    <style>
    /* ul>li>a:hover{
            background-color: #355691 !important
        } */

    .social-list {
        padding-top: 5px;
        padding-bottom: 5px;
        border-bottom: 1px dotted gray;
    }

    .social-i {
        padding-right: 5px;
    }

    .profile-box {
        background: white !important;
        padding: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .edit-profile-box {
        background: white !important;
        padding: 10px;
        margin-top: 2px;
        margin-bottom: 10px;
    }

    .badge-style {
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
        font-size: 16px;
        margin-top: 5px;
        margin-bottom: 5px;
        margin-right: 5px;
        color: white;
    }

    .our-skill-plus-button:hover {
        color: black;
    }

    .badge-close-feature:hover {
        display: inline;
        color: #580000 !important;
        padding-left: 5%;
        font-size: 16px;
        cursor: pointer;
    }
    </style>



   
</head>

<body class="animated fadeIn">

    <!-- Fixed navbar -->
    <?php 
        include("../includes/navbar.php")
      ?>
    <!-- Fixed navbar -->
    <!-- body -->
    <div class="row page-content " style="margin-bottom:100px">
        <div class="col-md-8 col-md-offset-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="cover profile">
                        <div class="wrapper">
                            <img src="../assets/static/img/profile-cover.png" class="show-in-modal" alt="people" />
                        </div>
                        <div class="cover-info">
                            <div class="avatar">
                                <img src="../assets/static/img/dark-blue.png" alt="people" />
                            </div>
                            <div class="name"><a href="#">Jubel Ahmed </a></div>

                            <ul class="cover-nav">
                                <li class="active">
                                    <a href="./profile.php"><i class="fa fa-fw fa-user"></i>
                                        Info</a>
                                </li>
                                <!-- <li>
                    <a href="#"
                      ><i class="fa fa-fw fa-image"></i> Portfolio</a
                    >
                  </li> -->
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-users"></i> Favourite List</a>
                                </li>
                                <li>
                                    <a href="profile.php"><i class="fa fa-fw fa-bars"></i> Feed
                                    </a>
                                </li>

                                <li style="margin-left:40px;margin-top:15px">
                                    <div class="action-buttons">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <a href="#" class="btn btn-azure btn-block"><i class="fa fa-heart"></i>
                                                    Favourite</a>
                                            </div>
                                            <div class="col-xs-6">
                                                <a href="#" class="btn btn-azure btn-block"><i
                                                        class="fa fa-envelope"></i> Message</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="profile-info-left">
                        <div class="action-buttons">
                            <div class="row">
                                <div class="col-xs-3"></div>
                                <div class="col-xs-6" style="margin-top:10px">
                                    <a href="#" class="btn btn-azure btn-block"><i class="fa
                        fa-user-plus"></i> Hire Me</a>
                                </div>
                                <div class="col-xs-3"></div>
                            </div>
                        </div>
                        <div class="section profile-box">
                            <div class="text-info">
                                <h4>Web Developer</h4>
                                <h5>
                                    Worked At -
                                    <span style="padding-left:8px;">amdersoft.org</span>
                                </h5>
                                <h5>
                                    <strong>From - </strong>
                                    <span style="padding-left:8px;">2019</span>
                                </h5>
                            </div>
                        </div>
                        <div class="section profile-box">
                            <h3>About Me</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                                sed ullamcorper ligula. Curabitur in sapien sed risus finibus
                                condimentum et ac quam. Quisque eleifend, lacus ut commodo
                                pulvinar, elit augue eleifend leo, eget suscipit augue erat id
                                orci. .
                            </p>
                        </div>

                        <div class="section profile-box">
                            <h3>Social</h3>
                            <ul class="list-unstyled list-social">
                                <li class="social-list">
                                    <a href="#"><i class="social-i fa fa-twitter"></i> @twitter</a>
                                </li>
                                <li class="social-list">
                                    <a href="#"><i class="social-i fa fa-facebook"></i>
                                        @facebook</a>
                                </li>
                                <li class="social-list">
                                    <a href="#"><i class="social-i fa fa-github"></i> @github</a>
                                </li>
                                <li class="social-list">
                                    <a href="#"><i class="social-i fa fa-linkedin"></i>
                                        @linkedin</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="profile-info-right">
                        <ul class="nav nav-pills nav-pills-custom-minimal
                custom-minimal-bottom">
                            <li class="active">
                                <a href="#profile" data-toggle="tab">Profile Info</a>
                            </li>
                            <li>
                                <a href="#edit_profile" data-toggle="tab">Update Profile</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <!-- profile -->
                            <div class="tab-pane fade in active" id="profile">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="section profile-box">
                                            <div>
                                                <h3 class="text-info"> Personal Info</h3>
                                            </div>
                                            <div style="padding-top:10px">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <span class="text-muted">Date of Birth</span>
                                                    </div>
                                                    <div class="col-sm-8">12 January 1990</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <span class="text-muted">Gender</span>
                                                    </div>
                                                    <div class="col-sm-8">Male</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <span class="text-muted">Lives in</span>
                                                    </div>
                                                    <div class="col-sm-8">Dhaka</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="section profile-box">
                                            <h3 class="text-info">Career Objective</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Ut sed ullamcorper ligula. Curabitur in sapien
                                                sed risus finibus condimentum et ac quam. Quisque
                                                eleifend, lacus ut commodo pulvinar, elit augue
                                                eleifend leo, eget suscipit augue erat id orci. .
                                            </p>
                                        </div>
                                        <div class="section profile-box">
                                            <h3 class="text-info">Experience</h3>

                                            <div style="padding-top:5px">
                                                <h4>Web Developer</h4>

                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Ut sed ullamcorper ligula. Curabitur in sapien
                                                    sed risus finibus condimentum et ac quam. Quisque
                                                    eleifend, lacus ut commodo pulvinar, elit augue
                                                    eleifend leo, eget suscipit augue erat id orci. .
                                                </p>
                                                <hr />
                                            </div>
                                            <div>
                                                <h4>Android Deveolper</h4>

                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Ut sed ullamcorper ligula. Curabitur in sapien
                                                    sed risus finibus condimentum et ac quam. Quisque
                                                    eleifend, lacus ut commodo pulvinar, elit augue
                                                    eleifend leo, eget suscipit augue erat id orci. .
                                                </p>
                                                <hr />
                                            </div>
                                        </div>

                                        <div class="section profile-box">
                                            <h3 class="text-info">Educational Qualification</h3>
                                            <div style="padding-top:5px ; padding-bottom:5px ;
                          border-bottom:1px dotted gray">
                                                <h4>Bachelor of Science</h4>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <span class="text-muted">Subject</span>
                                                    </div>
                                                    <div class="col-sm-8">Bsc in SWE</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <span class="text-muted">Institution</span>
                                                    </div>
                                                    <div class="col-sm-8">DIU</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <span class="text-muted">Year of Passing</span>
                                                    </div>
                                                    <div class="col-sm-8">2018</div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <span class="text-muted">Location</span>
                                                    </div>
                                                    <div class="col-sm-8">Dhaka</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <span class="text-muted">Result</span>
                                                    </div>
                                                    <div class="col-sm-8">Dhaka</div>
                                                </div>

                                            </div>

                                            <div style="padding-top:5px ; padding-bottom:5px ;
                          border-bottom:1px dotted gray">
                                                <h4>Bachelor of Science</h4>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <span class="text-muted">Subject</span>
                                                    </div>
                                                    <div class="col-sm-8">Bsc in SWE</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <span class="text-muted">Institution</span>
                                                    </div>
                                                    <div class="col-sm-8">DIU</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <span class="text-muted">Year of Passing</span>
                                                    </div>
                                                    <div class="col-sm-8">2018</div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <span class="text-muted">Location</span>
                                                    </div>
                                                    <div class="col-sm-8">Dhaka</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <span class="text-muted">Result</span>
                                                    </div>
                                                    <div class="col-sm-8">Dhaka</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="section profile-box">
                                            <h3 class="text-info">Skills</h3>
                                            <div>
                                                <span class="badge badge-style">Java</span>
                                                <span class="badge badge-style">C++</span>
                                                <span class="badge badge-style">Grapics Design</span>
                                                <span class="badge badge-style">Front End Developer</span>
                                                <span class="badge badge-style">Python</span>
                                                <span class="badge badge-style">C++</span>
                                                <span class="badge badge-style">Grapics Design</span>
                                                <span class="badge badge-style">Front End Developer</span>
                                                <span class="badge badge-style">Python</span>
                                            </div>
                                        </div>

                                        <div class="section profile-box">
                                            <h3 class="text-info">Others Skill</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Ut sed ullamcorper ligula. Curabitur in sapien
                                                sed risus finibus condimentum et ac quam. Quisque
                                                eleifend, lacus ut commodo pulvinar, elit augue
                                                eleifend leo, eget suscipit augue erat id orci. .
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end profile -->
                            <!-- add profile -->
                            <div class="tab-pane fade " id="edit_profile">

                                <div class="row">

                                    <div class="col-md-12">

                                        <div class="widget">
                                            <div class="widget-header">
                                                <span class="widget-caption"></span>
                                            </div>
                                            <div class="widget-body">
                                                <div class="collapse in">
                                                    <form role="form">
                                                        <div class="form-group">
                                                            <label for="">Career Objective</label>
                                                            <span class="input-icon icon-right">
                                                                <textarea class="form-control" cols="10"
                                                                    rows="6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, laborum.</textarea>
                                                                <!-- <i class="fa fa-user darkorange"></i> -->
                                                            </span>
                                                            <input type="button"
                                                                class="form-control btn btn-sm btn-success"
                                                                value=" Update">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Web Developer</label>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Dolor eos atque modi, nemo quae rerum.</p>
                                                            <input type="button" class="btn btn-sm btn-danger"
                                                                value=" delete">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Android Deveolper</label>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Dolor eos atque modi, nemo quae rerum.</p>
                                                            <input type="button" class="btn btn-sm btn-danger"
                                                                value=" delete">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Add Experience</label> <br>
                                                            <input type="text" class="form-control"
                                                                placeholder="Android Developer"><br>
                                                            <textarea class="form-control" rows="8"
                                                                cols="10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor eos atque modi, nemo quae rerum.</textarea>
                                                            <input type="button"
                                                                class="form-control btn btn-sm btn-primary"
                                                                value=" Add new experience">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="widget">
                                            <div class="widget-header">
                                                <center>
                                                    <h3 class="widget-caption"><u>Educational Qualification</u></h3>
                                                </center>
                                            </div>
                                            <div class="widget-body">
                                                <div class="collapse in">
                                                    <form role="form">
                                                        <div class="form-group bg-success">
                                                            <label for="">Title: SSC</label>
                                                            <input type="button" class="input-sm btn btn-sm"
                                                                style="margin-left:5%" value="Delete">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Subject</label>
                                                            <input type="text" class="form-control input-sm">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Institution</label>
                                                            <input type="text" class="form-control input-sm">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Year of Passing</label>
                                                            <input type="text" class="form-control input-sm">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Location</label>
                                                            <input type="text" class="form-control input-sm">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Result</label>
                                                            <input type="text" class="form-control input-sm">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="button"
                                                                class="btn btn-sm btn-success from-control"
                                                                class="form-control input-sm"
                                                                value="Add New Educational Qualification">
                                                        </div>

                                                    </form>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="widget">
                                            <div class="widget-header">
                                                <center>
                                                    <h3 class="widget-caption"><u>Educational Qualification</u></h3>
                                                </center>
                                            </div>
                                            <div class="widget-body">
                                                <div class="collapse in">

                                                    <div class="row" style="margin-top: 8px;">
                                                        <div class="col-md-4"></div>
                                                        <div class="col-md-3 col-sm-3 col-lg-3">
                                                            <div class="input-group input-group-sm">
                                                                <input class="form-control" id="idSpecialSkillInput"
                                                                    type="text" placeholder="special-skill">
                                                                <span class="input-group-btn">
                                                                    <i id="special_skill_btn"
                                                                        class="our-skill-plus-button fa fa-plus-circle"
                                                                        style="font-size: 30px; color: green; margin-left: 5px; cursor: pointer;"
                                                                        onclick="addNewSkill()"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row"
                                                        style="margin-top: 30px; margin-left: 20%; margin-right: 30%;">
                                                        <!-- add all special skill like that */ -->
                                                        <div id="idSpecialSkill">

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>



                                </div>

                            </div>
                            <!-- end profile -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../ajax/job-post/job-skill.js"></script>
</html>