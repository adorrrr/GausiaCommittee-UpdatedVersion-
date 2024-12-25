<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Gausia Committee Bangladesh</title>
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="css/registration.css">
    <link rel="icon" href="./assets/logo - Copy.png">
</head>
<body>
    <div id="navber-section">
        <div id="navber">
            <div id="logo-name">
                <a href="home.html"><img src="./assets/logo.png" alt=""></a>
                <div id="name">
                    <h2>Gausia Committee</h2>
                    <h3>Bangladesh</h3>
                </div>
            </div>
            <div>
                <div id="nav">
                    <ul class="nav_links">
                        <li><a href="home.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="donation.php">Donation</a></li>
                        <li><a href="contactus.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            <button class="login"><a href="login.php">Login</a></button>
        </div>
        <div id="header">
            <h1>Volunteer Registration</h1>
        </div>
    </div>
    


    <section>
        <div class="container">
            <header>Registration Form</header>
            <!-- Form -->
            <form action="#" method="POST" class="form" id="registration-form">
                <div class="input-box">
                    <label for="full-name">Full Name</label>
                    <input type="text" id="full-name" name="fname" placeholder="Enter full name" required>
                </div>
                <div class="input-box">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter email address" required>
                </div>
                <div class="input-box">
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" name="phone" placeholder="Enter phone number">
                </div>
                <div class="input-box">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter password" required>
                </div>
                <div class="input-box">
                    <label for="birth-date">Birth Date</label>
                    <input type="date" id="birth-date" name="date_of_birth" required>
                </div>
                <div class="input-box address-box">
                    <label for="address">Address</label>
                    <textarea id="address" name="address" placeholder="Enter your complete address"></textarea>
                </div>
                <div class="input-box select-box">
                    <label for="gender">Gender</label>
                    <select id="gender" name="gender" required>
                        <option value="" disabled selected>Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <button type="submit" name="register">Submit</button>
            </form>
            <!-- Notification Element -->
            <div id="notification" class="formcarry-alert"></div>
        </div>
    </section>




    <div id="sponsor">
        <img src="./assets/sponser1.png" alt="">
        <img src="./assets/sponser2.png" alt="">
        <img src="./assets/sponser3.png" alt="">
        <img src="./assets/sponser4.png" alt="">
    </div>

    <div id="footer">
        <p>Copyright © 2024 Gausia Committee Bangladesh - all rights reserved. Technical support by Quantic Dynamics.</p>
        <p>Terms and conditions | Privacy Policy</p>
    </div>

    <script src="js/registration.js"></script>
</body>
</html>




<?php
include("PHP/connection.php");

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $date_of_birth = mysqli_real_escape_string($conn, $_POST['date_of_birth']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);


    $password_hash = password_hash($password, PASSWORD_BCRYPT);


    $query = "INSERT INTO VOLUNTEERS (fname, email, phone, password_hash, address, date_of_birth, gender) 
              VALUES ('$fname', '$email', '$phone', '$password_hash', '$address', '$date_of_birth', '$gender')";

    try {
        if (mysqli_query($conn, $query)) {
            echo json_encode(['success' => true]);
        } else {
            error_log("Error in SQL query: " . mysqli_error($conn));
            echo json_encode(['success' => false, 'error' => 'Database insertion failed.']);
        }
    } catch (Exception $e) {
        error_log("Error: " . $e->getMessage());
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }
}
?>








