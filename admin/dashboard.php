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
          <li class="active">
            <a href="./dashboard.php" class="hover-effect">Home</a>
          </li>
          <li class="">
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
            <div class="col-md-5">
              <div class="row">
                <div class="col-md-6">
                  <div class="widget">
                    <div class="widget-header">
                      <h3 class="widget-caption">Account Creations</h3>
                    </div>
                    <div class="widget-body bordered-top bordered-sky">
                      <ul class="list-unstyled profile-about margin-none">
                        <canvas
                          id="chartAccountCreation"
                          width="400"
                          height="400"
                        ></canvas>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="widget">
                    <div class="widget-header">
                      <h3 class="widget-caption">Job Posts</h3>
                    </div>
                    <div class="widget-body bordered-top bordered-sky">
                      <ul class="list-unstyled profile-about margin-none">
                        <canvas
                          id="jobPostCart"
                          width="400"
                          height="400"
                        ></canvas>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="widget widget-friends">
                <div class="widget-header">
                  <h3 class="widget-caption">New Users</h3>
                </div>
                <div class="widget-body bordered-top  bordered-sky">
                  <div class="row">
                    <div class="col-md-12">
                      <ul class="img-grid" style="margin: 0 auto;">
                        <li>
                          <a href="#">
                            <img src="../assets/static/img/dark-blue.png" alt="image" />
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="../assets/static/img/dark-blue.png" alt="image" />
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="../assets/static/img/dark-blue.png" alt="image" />
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="../assets/static/img/dark-blue.png" alt="image" />
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="../assets/static/img/dark-blue.png" alt="image" />
                          </a>
                        </li>
                        <li class="clearfix">
                          <a href="#">
                            <img src="../assets/static/img/dark-blue.png" alt="image" />
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="../assets/static/img/dark-blue.png" alt="image" />
                          </a>
                        </li>
                       
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <!-- <div class="widget">
                <div class="widget-header">
                  <h3 class="widget-caption">Groups</h3>
                </div>
                <div class="widget-body bordered-top bordered-sky">
                  <div class="card">
                    <div class="content">
                      <ul class="list-unstyled team-members">
                        <li>
                          <div class="row">
                            <div class="col-xs-3">
                              <div class="avatar">
                                <img
                                  src="img/Likes/likes-1.png"
                                  alt="Circle Image"
                                  class="img-circle img-no-padding img-responsive"
                                />
                              </div>
                            </div>
                            <div class="col-xs-6">
                              Github
                            </div>

                            <div class="col-xs-3 text-right">
                              <btn class="btn btn-sm btn-azure btn-icon"
                                ><i class="fa fa-user"></i
                              ></btn>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="row">
                            <div class="col-xs-3">
                              <div class="avatar">
                                <img
                                  src="img/Likes/likes-3.png"
                                  alt="Circle Image"
                                  class="img-circle img-no-padding img-responsive"
                                />
                              </div>
                            </div>
                            <div class="col-xs-6">
                              Css snippets
                            </div>

                            <div class="col-xs-3 text-right">
                              <btn class="btn btn-sm btn-azure btn-icon"
                                ><i class="fa fa-user"></i
                              ></btn>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="row">
                            <div class="col-xs-3">
                              <div class="avatar">
                                <img
                                  src="img/Likes/likes-2.png"
                                  alt="Circle Image"
                                  class="img-circle img-no-padding img-responsive"
                                />
                              </div>
                            </div>
                            <div class="col-xs-6">
                              Html Action
                            </div>

                            <div class="col-xs-3 text-right">
                              <btn class="btn btn-sm btn-azure btn-icon"
                                ><i class="fa fa-user"></i
                              ></btn>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div> -->
            </div>

            <!--============= timeline posts-->
            <div class="col-md-7">
              <div class="box profile-info n-border-top">
                <form>
                  <textarea
                    class="form-control input-lg p-text-area"
                    placeholder="Save your note here."
                    rows="20"
                  ></textarea>
                </form>
                <div class="box-footer box-form">
                  <button class="btn btn-azure pull-right" type="button">
                    Save Note
                  </button>
                  <ul class="nav nav-pills"></ul>
                </div>
              </div>
            </div>
            <!-- end timeline posts-->
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container">
          <p class="text-muted">
            Copyright &copy; Company - All rights reserved
          </p>
        </div>
      </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
    <script src="../assets/js/admin-cart.js"></script>
  </body>

  <!-- Mirrored from demos.bootdey.com/dayday/sidebar_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jan 2019 17:35:42 GMT -->
</html>
