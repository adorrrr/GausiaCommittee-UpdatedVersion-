<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gausiacommittee_bd";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    
    error_log("Database connection failed: " . mysqli_connect_error());
    echo json_encode(['success' => false, 'error' => 'Database connection failed.']);
    exit();
}
?>
