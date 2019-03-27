<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.bootdey.com/dayday/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jan 2019 17:35:14 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="icon" href="./assets/static/img/icon-infohub.png">

    <title>Information Hub</title>
    <!-- Bootstrap core CSS -->
    <link href="./assets/bootstrap.3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/font-awesome.4.6.1/css/font-awesome.min.css" rel="stylesheet">
    <link href="./assets/css/animate.min.css" rel="stylesheet">
    <link href="./assets/css/timeline.css" rel="stylesheet">
    <link href="./assets/css/cover.css" rel="stylesheet">
    <link href="./assets/css/forms.css" rel="stylesheet">
    <link href="./assets/css/buttons.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="./assets/bootstrap.3.3.6/js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="animated fadeIn">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-white navbar-fixed-top">
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

                    <div id="loginform">
                        <form class="form-inline" style="">
                            <div class="form-group">
                                <label for="email" style="color: gray;">Email</label><br>
                                <input type="email" id="email" class="form-control input-xs" width="80px"
                                    style="margin-bottom: 13%;">
                                <br>
                            </div>
                            <div class="form-group">
                                <label for="password" style="color: gray;">Password</label><br>
                                <input type="password" id="password" class="form-control input-xs" width="80px"><br>
                                <a href="#"><small>Forget Password</small></a>
                            </div>
                            <div class="form-group" style="margin-top: 7%; margin-left: 10px; margin-bottom: 6%;">
                                <input type="button" class="form-control input-xs" id="signinBtn" width="20px"
                                    value="Login"><br>
                            </div>
                        </form>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Begin page content -->
    <div class="container page-content ">
        <div class="card-block center">
            <div class="row">
                <div class="col-sm-6">

                    <img src="http://taskkosolutions.com/images/vocation.png" alt="">
                    <p class="text-info">Information hub is the personal profile builder , knowledge share and job
                        finder web apps</p>
                </div><br>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <h5 id="error" style="color: red;"></h5>
                    <h4 id="success" style="color: green;"></h4>


                    <h4 class="m-b-0">

                        <span class="icon-text">Sign Up</span>
                    </h4>
                    <p class="text-muted">Create a new employer account</p>
                    <form method="POST">
                        <div class="form-group">
                            <input class="form-control" type="text" id="username" placeholder="Employer user Name">
                        </div>
                        
                        <div class="form-group">
                            <input class="form-control" type="email" id="emailb" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="text" id="company_name" placeholder="company Name">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" id="company_website" placeholder="company website link">
                        </div>
                        <div class="form-group">
                            <label>Location <font color="red">*</font></label>
                            <input type="text" name="joblocation" id="location" class="form-control"
                                placeholder="Dhanmondi 32, Dhaka 1205" />
                        </div>

                        <div class="form-group">
                            <label for="">Company Logo <font color="red">*</font></label><br>
                            <span class="file-input btn btn-azure btn-file">
                                Browse <input onchange="encodeImagetoBase64(this)" type="file" multiple="" id="file" name="file">
                            </span>
                            <span>
                                <img class="link" id="selectedCompanylogo"
                                    src="https://daffodilvarsity.edu.bd/images/logo.png" alt="Company Logo"
                                    style="max-width: 100px; max-height: 100px; margin-left: 50px; padding: 10px;">
                            </span>
                        </div>

                        <div class="form-group">
                            <input class="form-control" id="passwordb" type="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="passwordc" type="password" placeholder="Confirm Password">
                        </div>

                        <small>By clicking register button you are agree with all terms and condition.</small> <br><br>
                        <input type="button" class="btn btn-azure" id="newuserbtn" value="Register New CompanyAccount"><br>
                        <center>
                            <div id="loading"></div>
                        </center>

                    </form>

                </div>
            </div>

        </div>
    </div>
    <!-- scripts that is only for this page -->
    <script src="./ajax/auth/signin.js"></script>
    <script src="./ajax/auth/employer-signup.js"></script>

    <script>
    function encodeImagetoBase64(element) {
        var file = element.files[0];
        var reader = new FileReader();
        reader.onloadend = function() {
            $(".link").attr("src", reader.result);

            $(".link").text(reader.result);
        }
        reader.readAsDataURL(file);
    }
    </script>
    <?php 
    include('./includes/footer.php');
?>
</body>

</html>