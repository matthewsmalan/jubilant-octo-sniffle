<?php

error_reporting(0);
require "connect.php";

$username = $_POST["username"];
$password = $_POST["password"];
$md5_password = md5($password);
$remember_me = $_POST["remember_me"];

$find_login = $db->query("SELECT * FROM users WHERE (username='$username' OR email='$username') AND password='$md5_password'");
$fetch_login = $find_login->fetch_object();
$username_id = $fetch_login->id;

session_start();
$_SESSION["username"] = $username_id;

if($remember_me == "Remember Me") {
  setcookie("username",$username, time() + 7200);
}

echo $num_login = $find_login->num_rows;

?>