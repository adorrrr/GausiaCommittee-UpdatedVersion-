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
                        <li><a href="contactus.html">Contact</a></li>
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
              <label for="phone-number">Phone Number</label>
              <input type="text" id="phone-number" name="number" placeholder="Enter phone number" required>
            </div>
            <div class="input-box">
              <label for="birth-date">Birth Date</label>
              <input type="date" id="birth-date" name="birth_date" required>
            </div>
            <div class="input-box">
              <label for="address">Address</label>
              <input type="text" id="address" name="address" placeholder="Enter street address">
            </div>
            <div class="input-box">
              <label for="city">City</label>
              <input type="text" id="city" name="city" placeholder="Enter city">
            </div>
            <div class="input-box select-box">
              <label for="gender">Gender</label>
              <select id="gender" name="gender" required>
                <option value="" disabled selected>Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
            <button type="submit" name="register">Submit</button>
          </form>
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


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    // Sanitize user input
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $birth_date = mysqli_real_escape_string($conn, $_POST['birth_date']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);


    $query = "INSERT INTO VOLUNTEER (full_name, email, phone, birth_date, address, city, gender) 
              VALUES ('$fname', '$email', '$number', '$birth_date', '$address', '$city', '$gender')";
    $stmt = mysqli_prepare($conn, $query);


}

?>












