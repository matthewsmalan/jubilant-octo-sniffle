<?php

require "connect.php";

$special = $_POST["special"];
$points = $_POST["points"];

session_start();

$user = $_SESSION["username"];

$db->query("INSERT INTO points VALUES('','$special','$user','$points')");

echo "Added";

?>