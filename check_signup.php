     <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
     <script src='js/script.js'></script>

<?php

require "connect.php";

error_reporting(0);

// Variables
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$md5_password = md5($password);

// Username

echo "	<form>
                    <fieldset>";

if(strlen($username) < 3) {
  echo "<div class='form-group has-error'>
  <label class='control-label' for='inputError1'>Username requires 3 characters</label>
  <input type='text' class='form-control' id='inputError1' key='username_signup' value='$username'>
</div>";
} else {
  $username_count++;
}

if(strlen($username) > 25) {
  echo "<div class='form-group has-error'>
  <label class='control-label' for='inputError1'>The username is limited to 25 characters</label>
  <input type='text' class='form-control' id='inputError1' value='$username' key='username_signup'>
</div>";
} else {
  $username_count++;
}

$check_user = $db->query("SELECT * FROM users WHERE username='$username'");
$num_user = $check_user->num_rows;

if($num_user == 0) {
  $username_count++;
} else {
   echo "<div class='form-group has-error'>
  <label class='control-label' for='inputError1'>Username Taken </label>
  <input type='text' class='form-control' id='inputError1' value='$username' key='username_signup'>
</div>";
}

if($username_count == 3) {
  echo "<div class='form-group'>
			    		   <input class='form-control' placeholder='Username' name='username' type='text' id='username_signup' value='$username' key='username_signup'>
			    		</div>";
}

// End of Username

// Email

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // invalid emailaddress
    echo "<div class='form-group has-error'>
  <label class='control-label' for='inputError1'>Invalid Email</label>
  <input type='text' class='form-control' id='inputError1' value='$email' key='email_signup'>
</div>";
} else {
  $email_count++;
}

$check_email = $db->query("SELECT * FROM users WHERE email='$email'");
$num_email = $check_email->num_rows;

if($num_email == 0) {
  $email_count++;
} else {
   echo "<div class='form-group has-error'>
  <label class='control-label' for='inputError1'>Email Taken</label>
  <input type='text' class='form-control' id='inputError1' value='$email' key='email_signup'>
</div>";
}

if($email_count == 2) {
  echo "<div class='form-group'>
			    		   <input class='form-control' placeholder='Username' name='username' type='text' id='username_signup' value='$email' key='email_signup'>
			    		</div>";
}

// End of Email

// Password

if(strlen($password) < 6) {
  echo "<div class='form-group has-error'>
  <label class='control-label' for='inputError1'>Password requires 6 characters</label>
  <input type='password' class='form-control' id='inputError1' value='$password' key='password_signup'>
</div>";
} else {
  $password_count++;
  echo "<div class='form-group'>
			    		   <input class='form-control' placeholder='Password' name='password' type='password' id='password_signup' value='$password' key='password_signup'>
			    		</div>";
}

echo "<input class='btn btn-lg btn-primary btn-block' type='button' value='Sign Up Now' id='check_signup'>
			    	</fieldset>
			      	</form>";

// End of Password

if($username_count == 3 && $email_count == 2 && $password_count == 1) {
  $db->query("INSERT INTO users VALUES('','$username','$email','$md5_password')");
  
  $findID = $db->query("SELECT * FROM users WHERE username='$username' AND password='$md5_password'");
  $fetchID = $findID->fetch_object();
  $real_id = $fetchID->id;
  
  session_start();
  $_SESSION["username"] = $real_id;
  
    echo "Success";

}

?>