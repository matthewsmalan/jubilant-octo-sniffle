<?php

require "connect.php";

$special = $_POST["special"];
$points = $_POST["points"];
$book = $_POST["book"];

session_start();

$user = $_SESSION["username"];

$db->query("INSERT INTO points VALUES('','$special','$user','$points','$book')");

?>