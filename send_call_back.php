<?php

include('./connect.php');

$user_name = htmlspecialchars($_POST['user_name']);
$user_email = htmlspecialchars($_POST['user_email']);
$user_tel = htmlspecialchars($_POST['user_tel']);
$user_comment = htmlspecialchars($_POST['user_comment']);


$addrequest = "INSERT INTO `call_back` (`user_name`, `user_email`, `user_num`,`user_comment`) VALUES ('$user_name', '$user_email', '$user_tel', '$user_comment')";
mysqli_query($mysqli, $addrequest);


$redicet = $_SERVER['HTTP_REFERER'];
@header ("Location: $redicet");


?>