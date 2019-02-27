
<?php 
    include('./includes/header.php');
?>

  <body class="animated fadeIn">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-white navbar-fixed-top">
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

            <form class="form-inline" style="">
            	<div class="form-group">
            		<label for="username" style="color: gray;">Username</label><br>
            		<input type="text" id="username" class="form-control input-xs" width="80px" style="margin-bottom: 13%;">
            		<br>
            	</div>
            	<div class="form-group">
            		<label for="username" style="color: gray;">Password</label><br>
            		<input type="password" id="password" class="form-control input-xs" width="80px"><br>
            		<a href="#"><small>Forget Password</small></a>
            	</div>
            	<div class="form-group" style="margin-top: 7%; margin-left: 10px; margin-bottom: 6%;">
            		<input type="button" class="form-control input-xs" id="signinbutton" width="20px" value="Login" ><br>
            	</div>              	
            </form>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="container page-content ">
  <div class="card-block center">
        <div class="row">
        	<div class="col-sm-6">
        		<h2>Best place for sharing your stories</h2>
        		<img src="https://static.xx.fbcdn.net/rsrc.php/v3/yc/r/GwFs3_KxNjS.png" alt="">
        	</div><br>
        	<div class="col-sm-2"></div>
        	<div class="col-sm-4">
        		<h4 class="m-b-0">
		          <span class="icon-text">Sign Up</span>
		        </h4>
		        <p class="text-muted">Create a new account</p>
		        <form action="http://demos.bootdey.com/dayday/index.html" method="get">
		          <div class="form-group">
		            <input class="form-control" type="text" placeholder="First Name">
		          </div>
		          <div class="form-group">
		            <input class="form-control" type="text" placeholder="Last Name">
		          </div>
		          <div class="form-group">
		            <input class="form-control" type="email" placeholder="Email">
		          </div>
		          <div class="form-group">
		            <input placeholder="Birthday" class="form-control" type="text" onfocus="(this.type='date')"  id="date"> 

		          </div>
		          <div class="form-group">
		            <select name="ocopation" id="" class="form-control">
		            	<option value="student">Student</option>
		            	<option value="teacher">Teacher</option>
		            </select>
		          </div>
		          <div class="form-group " >
		          		<div class="control-group">
	                      <div class="radio" style="display: inline-block;">
	                          <label>
	                              <input name="form-field-radio" type="radio" checked="checked" >
	                              <span class="text">Male </span>
	                          </label>
	                      </div>
	                      <div class="radio" style="display: inline-block; margin-left: 10px;">
	                          <label>
	                              <input name="form-field-radio" class="inverted" type="radio">
	                              <span class="text">Female</span>
	                          </label>
	                      </div>
	                  </div>
		          </div>
		          <div class="form-group">
		            <input class="form-control" type="password" placeholder="Password">
		          </div>
		          <div class="form-group">
		            <input class="form-control" type="password" placeholder="Confirm Password">
		          </div>
		          
		          <small>By clicking register button you are agree with all terms and condition.</small> <br><br>

		          <button class="btn btn-azure" type="submit">Register</button>
		        </form>
        	</div>
        </div>
                  
    </div>

<!-- scripts that is only for this page -->
<script src="./ajax/signin.js"></script>
<?php 
    include('./includes/footer.php');
?>