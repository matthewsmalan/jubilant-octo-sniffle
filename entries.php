<?php

require "nav.php";

?>

<style>
  h3 {
            color: #fff;
            font-size: 24px;
            text-align: center;
            margin-top: 30px;
            padding-bottom: 30px;
            border-bottom: 1px solid #eee;
            margin-bottom: 30px;
            font-weight: 300;
        }
        
        .container {
            max-width: 970px;
        }
        
        div[class*='col-'] {
            padding: 0 30px;
        }
        
        .wrap {
            box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
            border-radius: 4px;
        }
        
        a:focus,
        a:hover,
        a:active {
            outline: 0;
            text-decoration: none;
        }
        
        .panel {
            border-width: 0 0 1px 0;
            border-style: solid;
            border-color: #fff;
            background: none;
            box-shadow: none;
        }
        
        .panel:last-child {
            border-bottom: none;
        }
        
        .panel-group > .panel:first-child .panel-heading {
            border-radius: 4px 4px 0 0;
        }
        
        .panel-group .panel {
            border-radius: 0;
        }
        
        .panel-group .panel + .panel {
            margin-top: 0;
        }
        
        .panel-heading {
            background-color: #0072AE;
            border-radius: 0;
            border: none;
            color: #fff;
            padding: 0;
        }
        
        .panel-title a {
            display: block;
            color: #fff;
            padding: 15px;
            position: relative;
            font-size: 22px;
            font-weight: 400;
        }
        
        .panel-body {
            background: #fff;
        }
        
        .panel:last-child .panel-body {
            border-radius: 0 0 4px 4px;
        }
        
        .panel:last-child .panel-heading {
            border-radius: 0 0 4px 4px;
            transition: border-radius 0.3s linear 0.2s;
        }
        
        .panel:last-child .panel-heading.active {
            border-radius: 0;
            transition: border-radius linear 0s;
        }
        /* #bs-collapse icon scale option */
        
        .panel-heading a:before {
            content: '\e146';
            position: absolute;
            font-family: 'Material Icons';
            right: 5px;
            top: 10px;
            font-size: 24px;
            transition: all 0.5s;
            transform: scale(1);
        }
        
        .panel-heading.active a:before {
            content: ' ';
            transition: all 0.5s;
            transform: scale(0);
        }
        
        #bs-collapse .panel-heading a:after {
            content: ' ';
            font-size: 24px;
            position: absolute;
            font-family: 'Material Icons';
            right: 5px;
            top: 10px;
            transform: scale(0);
            transition: all 0.5s;
        }
        
        #bs-collapse .panel-heading.active a:after {
            content: '\e909';
            transform: scale(1);
            transition: all 0.5s;
        }
        /* #accordion rotate icon option */
        
        #accordion .panel-heading a:before {
            content: '\e316';
            font-size: 24px;
            position: absolute;
            font-family: 'Material Icons';
            right: 5px;
            top: 10px;
            transform: rotate(180deg);
            transition: all 0.5s;
        }
        
        #accordion .panel-heading.active a:before {
            transform: rotate(0deg);
            transition: all 0.5s;
        }
</style>

<script src='http://code.jquery.com/jquery-1.11.1.min.js'>
   $(document).ready(function () {
            $('.collapse.in').prev('.panel-heading').addClass('active');
            $('#accordion, #bs-collapse')
                .on('show.bs.collapse', function (a) {
                    $(a.target).prev('.panel-heading').addClass('active');
                })
                .on('hide.bs.collapse', function (a) {
                    $(a.target).prev('.panel-heading').removeClass('active');
                });
        });
</script>

<!-- Table for Entries -->

 <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h3>Default collapse with scaling icon</h3>
            <div class="panel-group wrap" id="bs-collapse">
              
              <?php
              
              require "connect.php";
              
              session_start();
              
              $username = $_SESSION["username"];
              
              $getEntry = $db->query("SELECT * FROM points WHERE user='$username' GROUP by special");
              
              while($fetch_entry = mysqli_fetch_array($getEntry)) {
                $special = $fetch_entry["special"];
                $book = $fetch_entry["book"];
                
                $findBook = $db->query("SELECT * FROM books WHERE token_id='$book'");
                $grabBook = $findBook->fetch_object();
                $fetchBook = $grabBook->title;
                $fetchImage = $grabBook->image;
                
                echo "<div class='panel'>
                    <div class='panel-heading'>
                        <h4 class='panel-title'>
        <a data-toggle='collapse' data-parent='#bs-collapse' href='#one'>
         <img src='$fetchImage' id='image_table'>
         $fetchBook
        </a>
      </h4>
                    </div>";
                
                $getInfo = $db->query("SELECT * FROM videos WHERE special='$special'");
                
                while($fetch_info = mysqli_fetch_array($getInfo)) {
                  echo $title_video = $fetch_info["title"];
                }
              }
              
              
              ?>

                
                    <div id="one" class="panel-collapse collapse">
                        <div class="panel-body">
                          <div class='points'></div>
                        </div>
                    </div>

                </div>
                <!-- end of panel -->

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#two">
       Content 2
        </a>
      </h4>
                    </div>
                    <div id="two" class="panel-collapse collapse">
                        <div class="panel-body">

                            Where is the harp on the harpstring, and the red fire glowing? Where is the spring and the harvest and the tall corn growing?

                        </div>

                    </div>
                </div>
                <!-- end of panel -->

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#three">
          Content 3
        </a>
      </h4>
                    </div>
                    <div id="three" class="panel-collapse collapse">
                        <div class="panel-body">
                            ave gone down in the West behind the hills into shadow. Who shall gather the smoke of the deadwood burning, Or behold the flowing years from the Sea returning? The days have gone down in the West behind the hills into shadow. Who shall gather the smoke of the deadwood burning, Or behold the flowing years from the Sea returning? The days have gone down in the West behind the hills into shadow. Who shall gather the smoke of the deadwood burning, Or behold the flowing years from the Sea returning? The days have gone down in the West behind the hills into shadow. Who shall gather the smoke of the deadwood burning, Or behold the flowing years from the Sea returning?
                        </div>
                    </div>
                </div>
                <!-- end of panel -->

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#four">
         Content 4
        </a>
      </h4>
                    </div>
                    <div id="four" class="panel-collapse collapse in">
                        <div class="panel-body">

                            They have passed like rain on the mountain, like a wind in the meadow; The days have gone down in the West behind the hills into shadow.
                        </div>
                    </div>
                </div>
                <!-- end of panel -->

            </div>
            <!-- end of #bs-collapse  -->

        </div>



    </div>
    <!-- end of container -->
    
    <!-- End of Table for Entries -->

