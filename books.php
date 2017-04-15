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
<div class="col-xs-4 col-md-3 col-lg-2" id='title'>
  <img src='<?php echo $image_check; ?>' class='img-responsive'>
</div>

<!-- Description -->
<div class="col-xs-6 col-md-7 col-lg-5" id='description'>
 <span id='title_text'> <?php echo $title_check; ?> </span> <br> <span id='author_text'> by <a href='#' id='author_link'><?php echo $author_check; ?></a> </span> <br> <br>
 
 <div id='books_description'><?php echo $description_check; ?></div>
 
</div>
</div>

<!-- End of Info -->

<!-- Ways to Win -->

<br>
 
 <div class='row' id='win_row'>
   
  <div class="col-xs-5 col-sm-3 col-md-3 col-lg-2" id='title'>
    
    <!-- Title -->
    <span id='win_text'> Ways to Win </span> <br>
          
    <a href='#' class='win_link'> <div class='win_box' style='background: url("https://i.ytimg.com/vi/8sME-VxUQQA/hqdefault.jpg?custom=true&w=196&h=110&stc=true&jpg444=true&jpgq=90&sp=68&sigh=EgyGW3D0KWyu5ei-2aUz8FPI_Jc");'> <i class="fa fa-play" aria-hidden="true" id='video'></i>
   
   <div class='description'> Earn 5 Points </div>
   
   </div> </a>
  </div>
  
  <div class="col-xs-5 col-sm-3 col-md-3 col-lg-2" id='title'>
    <a href='#' class='win_link'> <div class='win_box' style='background: url("https://i.ytimg.com/vi/8sME-VxUQQA/hqdefault.jpg?custom=true&w=196&h=110&stc=true&jpg444=true&jpgq=90&sp=68&sigh=EgyGW3D0KWyu5ei-2aUz8FPI_Jc");'> <i class="fa fa-play" aria-hidden="true" id='video'></i>
   
   <div class='description'> Earn 5 Points </div>
   
   </div> </a>
  </div>
  
  <div class="col-xs-5 col-sm-3 col-md-3 col-lg-2" id='title'>
    <a href='#' class='win_link'> <div class='win_box' style='background: url("https://i.ytimg.com/vi/8sME-VxUQQA/hqdefault.jpg?custom=true&w=196&h=110&stc=true&jpg444=true&jpgq=90&sp=68&sigh=EgyGW3D0KWyu5ei-2aUz8FPI_Jc");'> <i class="fa fa-play" aria-hidden="true" id='video'></i>
   
   <div class='description'> Earn 5 Points </div>
   
   </div> </a>
  </div>
  
  <div class="col-xs-5 col-sm-3 col-md-3 col-lg-2" id='title'>
    <a href='#' class='win_link'> <div class='win_box' style='background: url("https://i.ytimg.com/vi/8sME-VxUQQA/hqdefault.jpg?custom=true&w=196&h=110&stc=true&jpg444=true&jpgq=90&sp=68&sigh=EgyGW3D0KWyu5ei-2aUz8FPI_Jc");'> <i class="fa fa-play" aria-hidden="true" id='video'></i>
   
   <div class='description'> Earn 5 Points </div>
   
   </div> </a>
  </div>
  
  <!-- BREAK -->
  
  <div class="col-xs-5 col-sm-3 col-md-3 col-lg-2" id='title'>
    <a href='#' class='win_link'> <div class='win_box' style='background: url("https://i.ytimg.com/vi/8sME-VxUQQA/hqdefault.jpg?custom=true&w=196&h=110&stc=true&jpg444=true&jpgq=90&sp=68&sigh=EgyGW3D0KWyu5ei-2aUz8FPI_Jc");'> <i class="fa fa-play" aria-hidden="true" id='video'></i>
   
   <div class='description'> Earn 5 Points </div>
   
   </div> </a>
  </div>
  
  
  <div class="col-xs-5 col-sm-3 col-md-3 col-lg-2" id='title'>
    <a href='#' class='win_link'> <div class='win_box' style='background: url("https://i.ytimg.com/vi/8sME-VxUQQA/hqdefault.jpg?custom=true&w=196&h=110&stc=true&jpg444=true&jpgq=90&sp=68&sigh=EgyGW3D0KWyu5ei-2aUz8FPI_Jc");'> <i class="fa fa-play" aria-hidden="true" id='video'></i>
   
   <div class='description'> Earn 5 Points </div>
   
   </div> </a>
  </div>
  
  
  <div class="col-xs-5 col-sm-3 col-md-3 col-lg-2" id='title'>
    <a href='#' class='win_link'> <div class='win_box' style='background: url("https://i.ytimg.com/vi/8sME-VxUQQA/hqdefault.jpg?custom=true&w=196&h=110&stc=true&jpg444=true&jpgq=90&sp=68&sigh=EgyGW3D0KWyu5ei-2aUz8FPI_Jc");'> <i class="fa fa-play" aria-hidden="true" id='video'></i>
   
   <div class='description'> Earn 5 Points </div>
   
   </div> </a>
  </div>
  
  
  <div class="col-xs-5 col-sm-3 col-md-3 col-lg-2" id='title'>
    <a href='#' class='win_link'> <div class='win_box' style='background: url("https://i.ytimg.com/vi/8sME-VxUQQA/hqdefault.jpg?custom=true&w=196&h=110&stc=true&jpg444=true&jpgq=90&sp=68&sigh=EgyGW3D0KWyu5ei-2aUz8FPI_Jc");'> <i class="fa fa-play" aria-hidden="true" id='video'></i>
   
   <div class='description'> Earn 5 Points </div>
   
   </div> </a>
  </div>
  
  
  <div class="col-xs-5 col-sm-3 col-md-3 col-lg-2" id='title'>
    <a href='#' class='win_link'> <div class='win_box' style='background: url("https://i.ytimg.com/vi/8sME-VxUQQA/hqdefault.jpg?custom=true&w=196&h=110&stc=true&jpg444=true&jpgq=90&sp=68&sigh=EgyGW3D0KWyu5ei-2aUz8FPI_Jc");'> <i class="fa fa-play" aria-hidden="true" id='video'></i>
   
   <div class='description'> Earn 5 Points </div>
   
   </div> </a>
  </div>
  
  
  <div class="col-xs-5 col-sm-3 col-md-3 col-lg-2" id='title'>
    <a href='#' class='win_link'> <div class='win_box' style='background: url("https://i.ytimg.com/vi/8sME-VxUQQA/hqdefault.jpg?custom=true&w=196&h=110&stc=true&jpg444=true&jpgq=90&sp=68&sigh=EgyGW3D0KWyu5ei-2aUz8FPI_Jc");'> <i class="fa fa-play" aria-hidden="true" id='video'></i>
   
   <div class='description'> Earn 5 Points </div>
   
   </div> </a>
  </div>
  
  
  <div class="col-xs-5 col-sm-3 col-md-3 col-lg-2" id='title'>
    <a href='#' class='win_link'> <div class='win_box' style='background: url("https://i.ytimg.com/vi/8sME-VxUQQA/hqdefault.jpg?custom=true&w=196&h=110&stc=true&jpg444=true&jpgq=90&sp=68&sigh=EgyGW3D0KWyu5ei-2aUz8FPI_Jc");'> <i class="fa fa-play" aria-hidden="true" id='video'></i>
   
   <div class='description'> Earn 5 Points </div>
   
   </div> </a>
  </div>
  
  
  <div class="col-xs-5 col-sm-3 col-md-3 col-lg-2" id='title'>
    <a href='#' class='win_link'> <div class='win_box' style='background: url("https://i.ytimg.com/vi/8sME-VxUQQA/hqdefault.jpg?custom=true&w=196&h=110&stc=true&jpg444=true&jpgq=90&sp=68&sigh=EgyGW3D0KWyu5ei-2aUz8FPI_Jc");'> <i class="fa fa-play" aria-hidden="true" id='video'></i>
   
   <div class='description'> Earn 5 Points </div>
   
   </div> </a>
  </div>
  
  
  <div class="col-xs-5 col-sm-3 col-md-3 col-lg-2" id='title'>
    <a href='#' class='win_link'> <div class='win_box' style='background: url("https://i.ytimg.com/vi/8sME-VxUQQA/hqdefault.jpg?custom=true&w=196&h=110&stc=true&jpg444=true&jpgq=90&sp=68&sigh=EgyGW3D0KWyu5ei-2aUz8FPI_Jc");'> <i class="fa fa-play" aria-hidden="true" id='video'></i>
   
   <div class='description'> Earn 5 Points </div>
   
   </div> </a>
  </div>
  
  
  <div class="col-xs-5 col-sm-3 col-md-3 col-lg-2" id='title'>
    <a href='#' class='win_link'> <div class='win_box' style='background: url("https://i.ytimg.com/vi/8sME-VxUQQA/hqdefault.jpg?custom=true&w=196&h=110&stc=true&jpg444=true&jpgq=90&sp=68&sigh=EgyGW3D0KWyu5ei-2aUz8FPI_Jc");'> <i class="fa fa-play" aria-hidden="true" id='video'></i>
   
   <div class='description'> Earn 5 Points </div>
   
   </div> </a>
  </div>
  
  
</div>
  
  <!-- Win Boxes -->
  
  <!-- End of Win Boxes -->