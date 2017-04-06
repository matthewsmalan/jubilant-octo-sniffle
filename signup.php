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
              <a href='login.php'> <button type="button" class="btn btn-danger" id="login_button">Login</button> </a>
        </div>

    </div>
</nav>
    <!-- End of Navigation col-md-3 portfolio-item -->
    

<div class="container">
    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4" id='login_form'>
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Join for Free</h3>
			 	</div>
			  	<div class="panel-body" id='signup_container'>
			    	<form>
                    <fieldset>
			    	  <div class="form-group">
			    		    <input class="form-control" placeholder="Username" name="username" type="text" key='username_signup' autocomplete="off">
			    		</div>
			    		
			    		<div class="form-group">
			    		    <input class="form-control" placeholder="Email" name="email" type="text" key='email_signup' autocomplete="off">
			    		</div>
			    		
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" value="" key='password_signup' autocomplete="off">
			    		</div>

			    		<input class="btn btn-lg btn-primary btn-block" type="button" value="Sign Up Now" id='check_signup'>
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
<!-- End of Login Page -->