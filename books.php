<?php

require  "nav.php";

$id = $_GET["id"];

$getInfo = $db->query("SELECT * FROM books WHERE token_id='$id'");
$fetchInfo = $getInfo->fetch_object();
$title_check = $fetchInfo->title;
$image_check = $fetchInfo->image;
$author_check = $fetchInfo->author;
$description_check = $fetchInfo->description;

?>

<!-- Info -->
<div class='row'>
  
<!-- Image -->
<div class="col-xs-5 col-md-3 col-lg-2" id='title'>
  <img src='<?php echo $image_check; ?>' class='img-responsive'> <br> <div id='win_text'> Ways to Win </div> <br> <button type="button" class="btn btn-info">5 Points Earned in Total</button>
  
</div>

<!-- Description -->
<div class="col-xs-7 col-md-7 col-lg-5" id='description'>
 <span id='title_text'> <?php echo $title_check; ?> </span> <br> <span id='author_text'> by <a href='#' id='author_link'><?php echo $author_check; ?></a> </span> <br> <br>
 
 <div id='books_description'><?php echo $description_check; ?></div>
 
</div>
</div>

<!-- End of Info -->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet"/>
<!-- Ways to Win -->

<br>
 
 <div class='row' id='win_row'>
   
   <?php
  
   session_start();
  $username = $_SESSION["username"];
     $getVideos = $db->query("SELECT * FROM videos WHERE token='$id'");
   
   while($fetch_videos = mysqli_fetch_array($getVideos)) {
        $number++;
        $title_video = $fetch_videos["title"];
        $photo_video = $fetch_videos["photo"];
        $points_video = $fetch_videos["points"];
        $src_video = $fetch_videos["src"];
        $special_video = $fetch_videos["special"];
        $token_id = $fetch_videos["token"];
        
        $checkUser = $db->query("SELECT * FROM points WHERE user='$username' AND special='$special_video'");
        $numUser = $checkUser->num_rows;
        
        if($numUser > 0) {
           echo "
       <div class='col-xs-5 col-sm-3 col-md-3 col-lg-2' id='title'>
  <div class='win_box2' data-toggle='modal' data-target='#myVideo2' style='background: url(\"$photo_video\");background-repeat: no-repeat
    background-position: center center; background-size: cover;' title='Video Completed' data='delete' photo='$photo_video' special='$special_video' points='$points_video' book='$token_id'>
    <i class='fa fa-play' aria-hidden='true' id='video'></i>
    <div class='description2'> $points_video Points Earned </div>
  </div>
  </div>";
        } else {
       echo "
       <div class='col-xs-5 col-sm-3 col-md-3 col-lg-2' id='title'>
       <a href='#' class='win_link'>
  <div class='win_box' data-toggle='modal' data-target='#myVideo' style='background: url(\"$photo_video\");background-repeat: no-repeat
    background-position: center center; background-size: cover;' title='$title_video' data='$src_video' photo='$photo_video' special='$special_video' points='$points_video' book='$token_id'>
    <i class='fa fa-play' aria-hidden='true' id='video'></i>
    <div class='description'> Earn $points_video Points </div>
  </div>
</a>
  </div>";
        }
        
   }
   
   ?>
  
</div>
  
  <!-- Win Boxes -->

<!-- Modal -->
<div id="myVideo" class="modal fade" role="dialog">
  <div class="modal-dialog" id='video_model'>

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id='title_video'>Loading...</h4>
      </div>
      <div class="modal-body">
        <p id='modal-text'>
          <?php
          
          session_start();
          
          if(!$_SESSION["username"]) {
            echo "You need to <a href='login.php'>login</a> to watch this video. Or <a href='signup.php'>Sign Up...</a>";
          } else {
            echo "<div id='skin'> <video id='myMovie'> <source src='videos/Fable Anniversary - Official Trailer.mp4'> </video> <nav> <div id='buttons'> <i class='fa fa-pause' aria-hidden='true' id='playButton'></i> </div> <span id='current'>0:00 / </span> <span id='duration'> 0:00</span> <div id='defaultBar'> <div id='progressBar'></div> </div> <div style='clear:both'></div> </nav> </div>";
          }
          
          ?>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- End of Modal -->


<!-- Modal Video -->
<div id="myVideo2" class="modal fade" role="dialog">
  <div class="modal-dialog" id='video_model'>

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id='title_video'>Video Completed</h4>
      </div>
      <div class="modal-body">
        <p id='modal-text'>
          <div id='points'> Hello </div>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- End of Modal Video -->