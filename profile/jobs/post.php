
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demos.bootdey.com/dayday/recover_password.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jan 2019 17:36:05 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/icon-infohub.png">
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
    <script src="../../assets/js/job_post.js"></script>
    
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-white navbar-fixed-top text-danger" style="">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
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
                  <li><a href="home.html">Home</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                      Jobs <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="new-job-post.html">Create New Job</a></li>
                      <li><a href="search-job.html">Search Jobs</a></li>
       
                    </ul>
                  </li>
                  <li class="right " ><a style="color:blue" href="./index.html">Log Out</a></li>
                </ul>
              </div>
            </div>
          </nav>

    <!-- Begin page content -->
    <div class="container page-content ">
      <div class="row">
        <!-- <div class="col-md-10  col-sm-8 col-xs-12 col-md-offset-3"> -->
          <form action="" method="post">
            <div class="wizards">
                <div class="progressbar">
                    <div class="progress-line" data-now-value="12.11" data-number-of-steps="5" style="width: 12.11%;"></div> <!-- 19.66% -->
                </div>
                <div class="form-wizard active">
                    <div class="wizard-icon"><i class="fa fa-file-text-o"></i></div>
                    <p>License</p>
                </div>
                <div class="form-wizard">
                    <div class="wizard-icon"><i class="fa fa-cog"></i></div>
                    <p>Job Details</p>
                </div>
                <div class="form-wizard">
                    <div class="wizard-icon"><i class="fa fa-cog"></i></div>
                    <p>Skils</p>
                </div>
                <div class="form-wizard">
                    <div class="wizard-icon"><i class="fa fa-info"></i></div>
                    <p>Description</p>
                </div>
                <div class="form-wizard">
                    <div class="wizard-icon"><i class="fa fa-eye"></i></div>
                    <p>Preview</p>
                </div>
                 
            </div>
            <fieldset>
                <iframe src="../../assets/license.txt"></iframe>
                <input class="checkbox-slider colored-danger" type="checkbox">
                <label class="form-check-label"><br>
                    <input class="form-check-input text-success" type="checkbox" style="color: green;" value="yes">By clicking next button I agree with this license
                </label>
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-next">Next</button>
                </div>
            </fieldset>
            <fieldset>
                <center><h4>Job Details</h4></center>
                <div class="form-group">
                    <label>Job Title <font color="red">*</font></label>
                    <input type="text" name="jobtitle" class="form-control" placeholder="Manager"/>
                </div>
                <div class="row">
                  <div class="col-md-8">
                      <div class="form-group">
                        <label>Company <font color="red">*</font> </label>
                        <input type="text" name="jobtitle" class="form-control" placeholder="Diu"/>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="form-group">
                        <label>Appling Deadline <font color="red">*</font></label>
                        <input placeholder="Deadline" id="jobtitle" class="form-control" type="text" onfocus="(this.type='date')"  id="jobtitle"> 
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="">Company Logo <font color="red">*</font></label><br>
                  <span class="file-input btn btn-azure btn-file">
                      Browse <input type="file" multiple="">
                  </span>
                  <span>
                    <img src="https://daffodilvarsity.edu.bd/images/logo.png" alt="Company Logo" style="max-width: 100px; max-height: 100px; margin-left: 50px; padding: 10px;">
                  </span>
                </div>
                <div class="form-group">
                    <label>Location <font color="red">*</font></label>
                    <input type="text" name="joblocation" class="form-control" placeholder="Dhanmondi 32, Dhaka 1205"/>
                </div>

               <label>This is a remote work / from home <font color="red">*</font></label>
                <div class="form-group">
                     <label>
                        <input class="checkbox-slider slider-icon yesno" type="checkbox">
                        <span class="text"></span>
                     </label>
                </div>
                <label>Job Type <font color="red">*</font></label>
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                       <div class="radio">
                        <label>
                            <input name="form-field-radio" type="radio" class="colored-blue">
                            <span class="text"> Part Time</span>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                       <div class="radio">
                        <label>
                            <input name="form-field-radio" type="radio" class="colored-blue">
                            <span class="text"> Full Time</span>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                       <div class="radio">
                        <label>
                            <input name="form-field-radio" type="radio" class="colored-blue">
                            <span class="text"> Contract</span>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                       <div class="radio">
                        <label>
                            <input name="form-field-radio" type="radio" class="colored-blue">
                            <span class="text"> Internship</span>
                        </label>
                      </div>
                    </div>

                </div>
                <label>Compensation <font color="red">*</font></label>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                       
                         <select name="" id="" style="width: 100%">
                           <option value="Annually">Annually</option>
                           <option value="Annually">Monthly</option>
                         </select>
                       
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                       <div class="input-group">
                        <span class="input-group-addon">TK</span>
                        <input type="text" class="form-control" placeholder="50,000">
                        <span class="input-group-addon">.0</span>
                      </div>
                    </div> 
                     <div class="col-md-1 col-sm-1 col-xs-1"> 
                      <div class="input-group badge" style="margin-top: 5px;margin-left: 15px;">
                        <span > TO</span>
                      </div>
                     </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                       <div class="input-group">

                        <span class="input-group-addon">TK</span>
                        <input type="text" class="form-control" placeholder="1,000,000">
                        <span class="input-group-addon">.0</span>
                      </div>
                    </div>
                  </div>
                   
                </div>
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Continue</button>
                </div>
            </fieldset>
            <fieldset>
                <center>
                  <h4>Skils <font color="red">*</font></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque velit maxime itaque, ad aperiam magnam voluptas id debitis molestias dolor!</p>
                </center>
                 <h5><b>Programming Skills</b></h5>
                 <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                       <div class="checkbox">
                        <label>
                            <label>
                                <input class="checkbox-slider yesno" id="java" value="Java" type="checkbox">
                                <span class="text">Java</span>
                            </label>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                       <div class="checkbox">
                        <label>
                            <input class="checkbox-slider yesno" type="checkbox">
                            <span class="text">Python</span>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                       <div class="checkbox">
                        <label>
                            <input class="checkbox-slider yesno" type="checkbox">
                            <span class="text">C++</span>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                       <div class="checkbox">
                        <label>
                            <input class="checkbox-slider yesno" type="checkbox">
                            <span class="text">Nodejs</span>
                        </label>
                      </div>
                    </div>

                </div>
                 <h5><b>Design Skills</b></h5>
                 <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                       <div class="checkbox">
                        <label>
                            <label>
                                <input class="checkbox-slider yesno" type="checkbox">
                                <span class="text">UI Design</span>
                            </label>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                       <div class="checkbox">
                        <label>
                            <input class="checkbox-slider yesno" type="checkbox">
                            <span class="text">Software Design</span>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                       <div class="checkbox">
                        <label>
                            <input class="checkbox-slider yesno" type="checkbox">
                            <span class="text">System Design</span>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                       <div class="checkbox">
                        <label>
                            <input class="checkbox-slider yesno" type="checkbox">
                            <span class="text">Grapics Design</span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <h5><b>Other Skills</b></h5>
                 <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                       <div class="checkbox">
                        <label>
                            <label>
                                <input class="checkbox-slider yesno" type="checkbox">
                                <span class="text">Analysts</span>
                            </label>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                       <div class="checkbox">
                        <label>
                            <input class="checkbox-slider yesno" type="checkbox">
                            <span class="text">Project Manager</span>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                       <div class="checkbox">
                        <label>
                            <input class="checkbox-slider yesno" type="checkbox">
                            <span class="text">Software Tester</span>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                       <div class="checkbox">
                        <label>
                            <input class="checkbox-slider yesno" type="checkbox">
                            <span class="text">Front End Developer</span>
                        </label>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                       <div class="checkbox">
                        <label>
                            <label>
                                <input class="checkbox-slider yesno" type="checkbox">
                                <span class="text">Teacher</span>
                            </label>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                       <div class="checkbox">
                        <label>
                            <input class="checkbox-slider yesno" type="checkbox">
                            <span class="text">Marketing Expert</span>
                        </label>
                      </div>
                    </div>
                    
                </div>
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" id="getSkills" class="btn btn-next">Next</button>
                </div>
            </fieldset>
            <fieldset>
                <center>
                  <h4>Job Description <font color="red">*</font></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque velit maxime itaque, ad aperiam magnam voluptas id debitis molestias dolor!</p>
                </center>

                <div class="form-group">
                    <textarea class="form-control" rows="15" style="width: 100%">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic autem deleniti in cum harum dolor iusto veniam necessitatibus, culpa praesentium ullam perferendis? Enim quo ad consectetur, recusandae excepturi delectus minima.</textarea>
                </div>
                 
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                </div>
            </fieldset>
            <fieldset>
                    <center><h4>Job Preview</h4></center>
                     <label for=""><h2>Job Title:</h2></label>
                     <address style="color: gray;"> <b>
                      Phoenix Market City Mall, New No. 142, Velachery Main Rd, Next To Raptakos Brett & Co, opp. Maruthi Driving School, Indira Gandhi Nagar, Velachery, Chennai, Tamil Nadu 600042, India
                    </b></address>
                    <label for=""><h2>Required Skills:</h2></label><br>

                     <span class="badge">Java</span>
                     <span class="badge">C++</span>
                     <span class="badge">Grapics Design</span>
                     <span class="badge">Front End Developer</span>
                     <span class="badge">Python</span>

                     <br>

                     <label for=""><h2>Job Description:</h2></label>
                     <p>
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto cupiditate esse est doloremque, libero, nemo! Possimus unde nam, quo impedit, enim velit dignissimos, est praesentium mollitia dolores consequuntur molestias eius. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero molestiae, dolorem commodi sequi distinctio eaque! Voluptatem itaque possimus corporis, odit incidunt unde repudiandae iste in explicabo alias laudantium adipisci? Facere.. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia quidem sunt velit hic praesentium ullam vero deleniti, aperiam quam reiciendis qui est vel ratione magnam blanditiis veritatis! Nesciunt, fugiat, temporibus!
                     </p>
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" id="submit-for-review" class="btn btn-next">Ok Submit For Review</button>
                </div>
            </fieldset>
            <fieldset>
                <div class="jumbotron text-center">
                <h4 style="color: green;">After Manually reviewing your job, it will be available in job section. <br> Thank You.</h4>
                </div>
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="submit" name="save" class="btn btn-primary btn-submit">Thank You</button>
                </div>
            </fieldset>
        </form>         
        <!-- </div> -->
      </div>
    </div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted text-center"> Copyright &copy; Diu Community - All rights reserved </p>
      </div>
    </footer>
      
  </body>
  <script src="../../ajax/job-post/job-post.js"></script>
<!-- Mirrored from demos.bootdey.com/dayday/recover_password.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jan 2019 17:36:06 GMT -->
</html>
