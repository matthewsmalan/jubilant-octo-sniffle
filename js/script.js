
$(document).ready(function() {
  
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
    if(data.indexOf("Success")) {
      window.open("index.php","_self");
    } else {
     $("#signup_container").html(data);
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