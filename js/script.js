
$(document).ready(function() {
  
  /* Video */

  
  /* End of Video */
  
  /* Ways to Win */
  
  $(".win_box").click(function() {
    
    var title = $(this).attr("title");
    var data = $(this).attr("data");
    var photo = $(this).attr("photo");
    
    $(".modal-dialog").html("<div class='modal-content'> <div class='modal-header'> <button type='button' class='close' data-dismiss='modal'>&times;</button> <h4 class='modal-title'>"+title+"</h4> </div> <div class='modal-body'> <p id='modal-text'> hi </p> </div> <div class='modal-footer'> <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button> </div> </div>");
  });
  
  /* End of Ways to Win */
  
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