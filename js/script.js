
$(window).resize(function() {
  doFirst();
});

$(document).ready(function() {
  
  
  
  /* Check for Model */
  
   $(".win_box").click(function() {
     
     var title = $(this).attr("title");
    var data = $(this).attr("data");
    $("#title_video").text(title);
    $("#myMovie").attr("src",data);
     
     var special = $(this).attr("special");
     var points = $(this).attr("points");
     
    playOrPause(false);
    
      
  $("#myMovie").on("ended",
  function(event) {
     $.ajax({
  type: "POST",
  url: "insert_points.php",
  data: {special: special, points:points},
  success: function(data){
    location.reload();
  }
});
  });
  });
  
    $("#myVideo").click(function() {
    var check_video = $('#myVideo').hasClass('in');
    if(check_video == false) {
     playOrPause(true);
   }
  });
  

  /* End of Check for Model */
  
  $("#myMovie").click(function() {
    myMovie=document.getElementById('myMovie');
    
     if(!myMovie.paused && !myMovie.ended) {
       playOrPause(false);
     } else {
       playOrPause(true);
     }
    
  });
  
  /* Video */
  
  $("#myMovie").on(
    "timeupdate play",
    function(event) {
      
      update();
      
      function format(s) {
    m = Math.floor(s / 60);
    m = (m >= 10) ? m : "0" + m;
    s = Math.floor(s % 60);
    s = (s >= 10) ? s : "0" + s;
    return m + ":" + s;
  }

   var time = format(Math.floor(this.currentTime) + 1);
   var duration = format(Math.floor(this.duration) + 1);
      
      onTrackedVideoFrame(time,duration);
    });
  
  /* End of Video */
  
  /* Read More */
  
   // Configure/customize these variables.
    var showChar = 375;  // How many characters are shown by default
    var ellipsestext = "";
    var moretext = "Show more";
    var lesstext = "Show less";
    

    $('#books_description').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
  
  /* End of Read More */
  
    /* Sign Up Page */
  
  $("#check_signup").click(function() {
    var username_signup = $("#signup_container input[key='username_signup']").val();
    var email_signup = $("#signup_container input[key='email_signup']").val();
    var password_signup = $("#signup_container input[key='password_signup']").val();
    
     $.ajax({
  type: "POST",
  url: "check_signup.php",
  data: {username: username_signup, email: email_signup, password: password_signup},
  success: function(data){
      $("#signup_container").html(data);
      
      if($("#signup_container:contains('Success')").length)
                        {
                          window.open("index.php","_self");
                        }
      
  }
});
    
  });
  
  /* End of Sign Up Page */

/* Login Page */
  
  $("#check_login").click(function() {
   var username = $("#username_login").val();
   var password = $("#password_login").val();
   var remember_me = $("#remember_me:checked").val();
   
   if(username.length < 1 && password.length < 1) {
     $("#login_failed").html("Both fields required <br> <br>");
   } else {
   
   $.ajax({
  type: "POST",
  url: "check_login.php",
  data: {username: username, password: password, remember_me: remember_me},
  success: function(data){
    
     if(data == 1) {
       $("#login_failed").html("");
       window.open("index.php","_self");
     } else if(data !== 1) {
       $("#login_failed").html("Login Failed <br> <br>");
     }
  }
});
}
   
  });
  
  /* End of Login Page */
  
});

/* Video Out */

function onTrackedVideoFrame(currentTime, duration){
    $("#current").text(currentTime + " / ");
    $("#duration").text(duration);
}


function doFirst(){
  
  if($(window).innerWidth() <= 767) {
   barSize = 170;
} else {
  barSize = 832;
}
  
  myMovie=document.getElementById('myMovie');
  playButton=document.getElementById('buttons');
  defaultBar=document.getElementById('defaultBar');
  progressBar=document.getElementById('progressBar');
  
  playButton.addEventListener('click', playOrPause, false);
  defaultBar.onclick=clickedBar('click', clickedBar, false);
}

function playOrPause(){
  if(!myMovie.paused && !myMovie.ended){
    myMovie.pause();
    playButton.innerHTML='<i class="fa fa-play" aria-hidden="true" id="playButton"></i>';
    window.clearInterval(updateBar);
  }else{
    myMovie.play();
    playButton.innerHTML='<i class="fa fa-pause" aria-hidden="true" id="playButton"></i>';
    updateBar=setInterval(update, 500);
  }
}

function update(){
  var size=parseInt (myMovie.currentTime*barSize/myMovie.duration);
  if(!myMovie.ended){
    progressBar.style.width=size+'px';
  }else{
    progressBar.style.width=size+'px';
    playButton.innerHTML='<i class="fa fa-play" aria-hidden="true" id="playButton"></i>';
    window.clearInterval(updateBar);
  }
}

function clickedBar(e){
  if(!myMovie.paused && !myMovie.ended){
    var mouseX=e.pageX-bar.offsetLeft;
    var newTime=mouseX*myMovie.duration/barSize;
    myMovie.currentTime=newTime;
    progressBar.style.width=mouseX+'px';
  }
}

window.addEventListener('load', doFirst, false);

/* End of Video Out */