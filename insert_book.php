<?php

require "connect.php";

$token_id = $_GET["token_id"];
$token = $_GET["token"];

$random = $db->query("SELECT * FROM books WHERE token=0 ORDER BY RAND() LIMIT 1");
$random_fetch = $random->fetch_object();
$new_token = $random_fetch->token_id;

// UPDATE BOOK

$find_book = $db->query("SELECT * FROM books WHERE token_id='$new_token'");
$fetch_find = $find_book->fetch_object();
$find_image = $fetch_find->image;

$new_time = date("m/d/Y H:i", strtotime('+5 hours'));
$update_book = $db->query("UPDATE books SET token=$token, end_date='$new_time' WHERE token_id='$new_token'");

// REPLACE NEW BOOK

$replace_book = $db->query("UPDATE books SET token=0 WHERE token_id='$token_id'");

// JSON ARRAY

$var = array("time" => $new_time, "image" => $find_image);
print_r(json_encode($var));



?>