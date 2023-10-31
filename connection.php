<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "login_sample_db";

$con = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($con->connect_error) {

    die("Connection error: " . $con->connect_error);
} 

?>

