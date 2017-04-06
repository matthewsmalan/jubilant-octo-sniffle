<!DOCTYPE html>
<html>
  <head>
    <title> Website </title>
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    
    <!-- JS Files -->
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src='js/jquery.countdown.js'></script>
  </head>
  
  <body>
    
    <!-- Navigation -->
   <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">

        <div class="navbar-brand">
            <a href="index.php"> <img src="http://logos-download.com/wp-content/uploads/2016/06/Udemy_logo.png" class="img-responsive" id="logo"> </a>
        </div>
        
        <?php
        
        error_reporting(0);
        
        require "connect.php";
        
        session_start();
        
        $username = $_SESSION["username"];
        
        $findUser = $db->query("SELECT * FROM users WHERE id='$username'");
        $fetchUser = $findUser->fetch_object();
        $avatar = $fetchUser->avatar;
        $real_name = $fetchUser->username;
        
        if($_SESSION["username"]) {
          echo "<div class='pull-right'>
        <div class='dropdown'>
  <div id='avatar_div'> <img src='$avatar' id='avatar'> <span id='real_name'> $real_name </span> <i class='fa fa-caret-down' aria-hidden='true' id='avatar_caret'></i> </div>
  <div class='dropdown-content'>
    <a href='#'>My Entries</a>
    <a href='#'>My Settings</a>
    <a href='log_out.php' id='log_out'>Log Out</a>
  </div>
</div>
</div>";
        } else {
echo "<div class='pull-right'>
              <a href='login.php'> <button type='button' class='btn btn-danger' id='login_button'>Login</button> </a>
        </div>";
        }
  ?>
             
        
        

    </div>
</nav>
    <!-- End of Navigation col-md-3 portfolio-item -->
    