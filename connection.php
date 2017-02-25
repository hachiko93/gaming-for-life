<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "internet-prodavnica";
$mysqli = new mysqli($server, $user, $password, $database);
if ($mysqli->connect_errno) {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    exit();
}
$mysqli->set_charset("utf8");
?>
