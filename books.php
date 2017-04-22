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
  <img src='<?php echo $image_check; ?>' class='img-responsive'> <br> <div id='win_text'> Ways to Win </div>
  
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
   
   $getVideos = $db->query("SELECT * FROM videos WHERE token='$id'");
   
   while($fetch_videos = mysqli_fetch_array($getVideos)) {
        $number++;
        $title_video = $fetch_videos["title"];
        $photo_video = $fetch_videos["photo"];
        $points_video = $fetch_videos["points"];
        $src_video = $fetch_videos["src"];
        
       echo "
       <div class='col-xs-5 col-sm-3 col-md-3 col-lg-2' id='title'>
       <a href='#' class='win_link'>
  <div class='win_box' data-toggle='modal' data-target='#myVideo' style='background: url(\"$photo_video\");background-repeat: no-repeat
    background-position: center center; background-size: cover;' title='$title_video' data='$src_video' photo='$photo_video'>
    <i class='fa fa-play' aria-hidden='true' id='video'></i>
    <div class='description'> Earn 5 Points </div>
  </div>
</a>
  </div>";
        
   }
   
   ?>
  
</div>
  
  <!-- Win Boxes -->

<!-- Modal -->
<div id="myVideo" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p id='modal-text'>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- End of Modal -->