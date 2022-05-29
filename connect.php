<?php 

$servername = "localhost";
$database = "ckremstroypro";
$username = "root";
$password = "usbw";

$mysqli = new mysqli($servername, $username, $password, $database);
if ($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();
}
mysqli_set_charset($mysqli, "utf8");
?>
