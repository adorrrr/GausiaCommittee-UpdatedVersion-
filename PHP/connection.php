<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gausiacommittee";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn){

}
else{
    header("location: error404.html");
    exit();
}