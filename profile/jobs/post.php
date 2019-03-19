<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.bootdey.com/dayday/recover_password.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jan 2019 17:36:05 GMT -->



<head>

    <?php include("../job-includes/job-header.php") ?>

    <script src="../../assets/js/job_post.js"></script>
    <script src="../../assets/js/job-post-validation.js"></script>

    <style>
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

<body>

    <!-- Fixed navbar -->
    <?php include('../job-includes/job-navbar.php') ?>

    <!-- Begin page content -->
    <div class="container page-content ">
        <div class="row">
            <!-- <div class="col-md-10  col-sm-8 col-xs-12 col-md-offset-3"> -->
            <form action="" method="post">
                <div class="wizards">
                    <div class="progressbar">
                        <div class="progress-line" data-now-value="12.11" data-number-of-steps="5"
                            style="width: 12.11%;"></div> <!-- 19.66% -->
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
                        <input id="agreement_text" class="form-check-input text-success" type="checkbox"
                            style="color: green;" value="yes">By clicking next button I agree with this license
                    </label>
                    <div class="wizard-buttons">
                        <button type="button" id="agree_btn" class="btn btn-accept-licence">Next</button>
                    </div>
                </fieldset>
                <fieldset>
                    <center>
                        <h4>Job Details</h4>
                        <font color="red" id="error"></font>
                    </center>
                    <div class="form-group">
                        <label>Job Title <font color="red">*</font></label>
                        <input type="text" name="job_title" id="job_title" class="form-control" placeholder="Manager" />
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Company <font color="red">*</font> </label>
                                <input type="text" name="company" id="company" class="form-control" placeholder="Diu" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Appling Deadline <font color="red">*</font></label>
                                <input placeholder="Deadline" id="deadline" class="form-control" type="text"
                                    onfocus="(this.type='date')" id="jobtitle">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company Website<font color="red">*</font> </label>
                                    <input type="text" name="companywebsite" id="companywebsite" class="form-control"
                                        placeholder="https://www.company.com" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">Require!</label><br>
                                <span class="badge" style="background-color:green;">https://</span> Company website must
                                have a secure http protocol (HTTPS)
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Company Logo <font color="red">*</font></label><br>
                        <span class="file-input btn btn-azure btn-file">
                            Browse <input onchange="encodeImagetoBase64(this)" type="file" multiple="">
                        </span>
                        <span>
                            <img class="link" id="selectedCompanylogo"
                                src="https://daffodilvarsity.edu.bd/images/logo.png" alt="Company Logo"
                                style="max-width: 100px; max-height: 100px; margin-left: 50px; padding: 10px;">
                        </span>
                    </div>
                    <div class="form-group">
                        <label>Location <font color="red">*</font></label>
                        <input type="text" name="joblocation" id="location" class="form-control"
                            placeholder="Dhanmondi 32, Dhaka 1205" />
                    </div>

                    <label>This is a remote work / from home <font color="red">*</font></label>
                    <div class="form-group">
                        <label>
                            <input class="checkbox-slider slider-icon yesno" id="isRemoteWork" type="checkbox">
                            <span class="text"></span>
                        </label>
                    </div>
                    <label>Job Type <font color="red">*</font></label>
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="radio">
                                <label>
                                    <input name="jobtype" value="Part Time" id="jobtype" type="radio"
                                        class="colored-blue">
                                    <span class="text"> Part Time</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="radio">
                                <label>
                                    <input name="jobtype" value="Full Time" id="jobtype" type="radio"
                                        class="colored-blue">
                                    <span class="text"> Full Time</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="radio">
                                <label>
                                    <input name="jobtype" id="jobtype" value="Contract" type="radio"
                                        class="colored-blue">
                                    <span class="text"> Contract</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="radio">
                                <label>
                                    <input name="jobtype" id="jobtype" value="Internship" type="radio"
                                        class="colored-blue">
                                    <span class="text"> Internship</span>
                                </label>
                            </div>
                        </div>

                    </div>
                    <label>Compensation <font color="red">*</font></label>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3">

                                <select name="" id="compensationtype" style="width: 100%">
                                    <option value="Annually">Annually</option>
                                    <option value="Annually">Monthly</option>
                                </select>

                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="input-group">
                                    <span class="input-group-addon">TK</span>
                                    <input type="text" id="min_salary" class="form-control" placeholder="50,000">
                                    <span class="input-group-addon">.0</span>
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-1">
                                <div class="input-group badge" style="margin-top: 5px;margin-left: 15px;">
                                    <span> TO</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="input-group">

                                    <span class="input-group-addon">TK</span>
                                    <input type="text" id="max_salary" class="form-control" placeholder="1,000,000">
                                    <span class="input-group-addon">.0</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="wizard-buttons">
                        <button type="button" id="job_details_previous_btn" class="btn btn-previous">Previous</button>
                        <button type="button" id="job_details_continue_btn"
                            class="btn btn-success btn-job-basic-info-filledup">Continue</button>
                        <!-- btn-next -->
                    </div>
                </fieldset>
                <fieldset>
                    <center>
                        <h4>Skils <font color="red">*</font>
                        </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque velit maxime itaque, ad
                            aperiam magnam voluptas id debitis molestias dolor!</p>
                    </center>
                    <h5><b>Programming Skills</b></h5>
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="checkbox">
                                <label>
                                    <label>
                                        <input class="checkbox-slider yesno" name="skillyesno" id="java" value="Java"
                                            type="checkbox">
                                        <span class="text">Java</span>
                                    </label>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="checkbox">
                                <label>
                                    <input class="checkbox-slider yesno" name="skillyesno" value="Python"
                                        type="checkbox">
                                    <span class="text">Python</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="checkbox">
                                <label>
                                    <input class="checkbox-slider yesno" name="skillyesno" value="C++" type="checkbox">
                                    <span class="text">C++</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="checkbox">
                                <label>
                                    <input class="checkbox-slider yesno" name="skillyesno" value="Nodejs"
                                        type="checkbox">
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
                                        <input class="checkbox-slider yesno" name="skillyesno" value="UI Design"
                                            type="checkbox">
                                        <span class="text">UI Design</span>
                                    </label>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="checkbox">
                                <label>
                                    <input class="checkbox-slider yesno" name="skillyesno" value="Software Design"
                                        type="checkbox">
                                    <span class="text">Software Design</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="checkbox">
                                <label>
                                    <input class="checkbox-slider yesno" name="skillyesno" value="System Design"
                                        type="checkbox">
                                    <span class="text">System Design</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="checkbox">
                                <label>
                                    <input class="checkbox-slider yesno" name="skillyesno" value="Graphics Design"
                                        type="checkbox">
                                    <span class="text">Graphics Design</span>
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
                                        <input class="checkbox-slider yesno" name="skillyesno" value="Analysts"
                                            type="checkbox">
                                        <span class="text">Analysts</span>
                                    </label>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="checkbox">
                                <label>
                                    <input class="checkbox-slider yesno" name="skillyesno" value="Project Manager"
                                        type="checkbox">
                                    <span class="text">Project Manager</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="checkbox">
                                <label>
                                    <input class="checkbox-slider yesno" name="skillyesno" value="Software Tester"
                                        type="checkbox">
                                    <span class="text">Software Tester</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="checkbox">
                                <label>
                                    <input class="checkbox-slider yesno" name="skillyesno" value="Front End Developer"
                                        type="checkbox">
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
                                        <input class="checkbox-slider yesno" name="skillyesno" value="Teacher"
                                            type="checkbox">
                                        <span class="text">Teacher</span>
                                    </label>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="checkbox">
                                <label>
                                    <input class="checkbox-slider yesno" name="skillyesno" value="Marketing Expert"
                                        type="checkbox">
                                    <span class="text">Marketing Expert</span>
                                </label>
                            </div>
                        </div>

                    </div>

                    <div class="row" style="margin-top: 8px;">
                        <div class="col-md-4"></div>
                        <div class="col-md-3 col-sm-3 col-lg-3">
                            <div class="input-group input-group-sm">
                                <input class="form-control" id="idSpecialSkillInput" type="text"
                                    placeholder="special-skill">
                                <span class="input-group-btn">
                                    <i id="special_skill_btn" class="our-skill-plus-button fa fa-plus-circle"
                                        style="font-size: 30px; color: green; margin-left: 5px; cursor: pointer;"
                                        onclick="addNewSkill()"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px; margin-left: 20%; margin-right: 30%;">
                        <!-- add all special skill like that */ -->
                        <div id="idSpecialSkill">

                        </div>

                    </div>
                    <div class="wizard-buttons" style="margin-top: 15px;">
                        <button type="button" class="btn btn-previous">Previous</button>
                        <button type="button" id="skill_details_continue_btn"
                            class="btn btn-next skill-job-basic-info-filledup">Next</button>
                    </div>
                </fieldset>
                <fieldset>
                    <center>
                        <h4>Job Description <font color="red">*</font>
                        </h4>
                        <p>Job Description must be in clear text. Try to explain batter. If information not written in
                            clearly reviewer may reject this request.</p>
                    </center>

                    <div class="form-group">
                        <textarea class="form-control" id="jobdescriptioninfo" rows="15"
                            style="width: 100%">Your job post Description</textarea>
                    </div>

                    <div class="wizard-buttons">
                        <button type="button" class="btn btn-previous">Previous</button>
                        <button type="button" id="description_details_continue_btn"
                            class="btn btn-next description-job-basic-info-filledup">Next</button>
                    </div>
                </fieldset>
                <fieldset>
                    <center>
                        <h4>Job Preview</h4>
                    </center>
                    <label for="">
                        <h2 id="job_title_display">Job Title:</h2>
                    </label>
                    <address style="color: gray;"> <b id="SimpleViewDetails">
                            Phoenix Market City Mall, New No. 142, Velachery Main Rd, Next To Raptakos Brett & Co, opp.
                            Maruthi Driving School, Indira Gandhi Nagar, Velachery, Chennai, Tamil Nadu 600042, India
                        </b></address>
                    <label for="">
                        <h2>Required Skills:</h2>
                    </label><br>

                    <div id="reviewSkills">
                        <!-- <span class="badge">Java</span>
                        <span class="badge">C++</span>
                        <span class="badge">Grapics Design</span>
                        <span class="badge">Front End Developer</span>
                        <span class="badge">Python</span> -->
                    </div>

                    <br>

                    <label for="">
                        <h2>Job Description:</h2>
                    </label>
                    <p id="JobDescriptionPreview">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto cupiditate esse est doloremque,
                        libero, nemo! Possimus unde nam, quo impedit, enim velit dignissimos, est praesentium mollitia
                        dolores consequuntur molestias eius. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Vero molestiae, dolorem commodi sequi distinctio eaque! Voluptatem itaque possimus corporis,
                        odit incidunt unde repudiandae iste in explicabo alias laudantium adipisci? Facere.. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit. Officia quidem sunt velit hic praesentium ullam
                        vero deleniti, aperiam quam reiciendis qui est vel ratione magnam blanditiis veritatis!
                        Nesciunt, fugiat, temporibus!
                    </p>
                    <div class="wizard-buttons">
                        <button type="button" class="btn btn-previous">Previous</button>
                        <button type="button" id="submit-for-review" class="btn btn-next">Ok Submit For Review</button>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="jumbotron text-center">
                        <h4 style="color: green;">After Manually reviewing your job, it will be available in job
                            section. <br> Thank You.</h4>
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
<script src="../../ajax/job-post/job-skill.js"></script>
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
<!-- Mirrored from demos.bootdey.com/dayday/recover_password.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jan 2019 17:36:06 GMT -->

</html>