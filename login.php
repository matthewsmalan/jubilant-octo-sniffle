<?php

  require "connect.php";

?>

<!DOCTYPE html>
<html>
  <head>
    <title> Website </title>
    
    <!-- CSS Files -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    
    <!-- JS Files -->
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src='js/jquery.countdown.js'></script>
    <script src='js/script.js'></script>
  </head>
  
  <body>
    
    <!-- Navigation -->
   <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">

        <div class="navbar-brand">
            <a href="index.php"> <img src="http://logos-download.com/wp-content/uploads/2016/06/Udemy_logo.png" class="img-responsive" id="logo"> </a>
        </div>
        
        <div class="pull-right">
              <a href='signup.php'> <button type="button" class="btn btn-danger" id="login_button">Sign Up</button> </a>
        </div>

    </div>
</nav>
    <!-- End of Navigation col-md-3 portfolio-item -->
    

<div class="container">
    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4" id='login_form'>
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Please sign in</h3>
			 	</div>
			  	<div class="panel-body">
			  	  <span id='login_failed'></span>
			    	<form>
                    <fieldset>
			    	  <div class="form-group">
			    		    <input class="form-control" placeholder="Username or Email" name="email" type="text" id='username_login' autocomplete="off">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" value="" id='password_login' autocomplete="off">
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me" id='remember_me'> Remember Me
			    	    	</label>
			    	    </div>
			    		<input class="btn btn-lg btn-primary btn-block" type="button" value="Login" id='check_login'>
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
<!-- End of Login Page -->