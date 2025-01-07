<?php
session_start();
require_once('PHP/connection.php'); 

// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        die("Please provide both email and password.");
    }

    // Check Admin login
    $adminQuery = "SELECT * FROM Admins WHERE email = ?";
    $stmt = $conn->prepare($adminQuery);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $adminResult = $stmt->get_result();

    if ($adminResult->num_rows > 0) {
        $admin = $adminResult->fetch_assoc();
        
        // Compare password (use plain text comparison for now, but recommend using password_hash and password_verify for better security)
        if ($password === $admin['password']) {
            $_SESSION['user_id'] = $admin['id'];
            $_SESSION['user_type'] = 'admin'; // Indicate that the user is an admin
            header("Location: Admin/adminProfile.php"); // Redirect to admin dashboard
            exit;
        } else {
            die("Incorrect Admin credentials.");
        }
    }

    // Check Volunteer login
    $volunteerQuery = "SELECT * FROM Volunteers WHERE email = ?";
    $stmt = $conn->prepare($volunteerQuery);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $volunteerResult = $stmt->get_result();

    if ($volunteerResult->num_rows > 0) {
        $volunteer = $volunteerResult->fetch_assoc();
        
        // Compare password
        if ($password === $volunteer['password']) {

            switch ($volunteer['status']) {
                case 'Approved':
                    $_SESSION['user_id'] = $volunteer['id'];
                    $_SESSION['user_type'] = 'volunteer'; // Indicate that the user is a volunteer
                    header("Location: volunteer_dashboard.php"); // Redirect to volunteer dashboard
                    exit;
                case 'Pending':
                    die("Your application is under review. Please wait.");
                case 'Rejected':
                    die("You are not eligible to be a volunteer.");
                default:
                    die("Unexpected status. Please contact support.");
            }
        } else {
            die("Incorrect Volunteer credentials.");
        }
    }

    // If no matching user is found in either table
    die("No account found with this email.");
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gausia Committee Bangladesh</title>
  <link rel="stylesheet" href="./css/home.css">
  <link rel="stylesheet" href="./css/login.css">
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
                <!-- <a href="javascript:void(0);" class="icon" onclick="toggleMenu()">
                    <i class="ri-menu-4-line"></i>
                </a> -->
            </div>
            <button><a href="login.php">Login</a></button>
        </div>
        <div id="header">
            <h1>Login</h1>
        </div>
    </div>

    <section>
        <div class="login_form">
          <form action="" method="POST" autocomplete="off">
            <h3>Log in</h3>

            <p class="separator">
              <span></span>
            </p>
          

            <div class="input_box">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="Enter email address" required />
            </div>

            <div class="input_box">
              <div class="password_title">
                <label for="password">Password</label>
                <a href="error404.html">Forgot Password?</a>
              </div>
              <input type="password" id="password" name="password" placeholder="Enter your password" required />
            </div>

            <button type="submit" name="login">Log In</button>
          
            <p class="sign_up">Don't have an account? <a href="registration.php">Sign up</a></p>
          </form>
        </div>
    </section>

    <div class="testimonials-section">
      <div class="header">
         <h5>Our Testimonials</h5>
         <h2>What People Say</h2>
      </div>

      <div class="slider-container">
          <button class="slider-btn prev-btnn">&#8249;</button>
          <div class="slider">
              <div class="slide active">
                  <img src="./assets/Ador.jpg" alt="User 1" class="avatar">
                  <h3>Ahasanul Monir Adar</h3>
                  <p>Founder</p>
                  <p class="feedback">"Sea Chub Demoiselle Whalefish Zebra Lionfish Mud Cat Pelican Eel."</p>
              </div>

              <div class="slide">
                  <img src="./assets/fahim.jpg" alt="User 2" class="avatar">
                  <h3>Fahim Ahamed</h3>
                  <p>Designer</p>
                  <p class="feedback">"Minnow Snoek Icefish Velvet-Belly Shark. California Halibut."</p>
              </div>

              <div class="slide">
                  <img src="./assets/nashib.jpg" alt="User 3" class="avatar">
                  <h3>Nasib Pagol</h3>
                  <p>CEO</p>
                  <p class="feedback">"Southern Grayling Trout Perch Sharksucker Sea Toad Rocket."</p>
              </div>
          </div>
          <button class="slider-btn next-btnn">&#8250;</button>
      </div>
      <div class="dots">
          <span class="dot active"></span>
          <span class="dot"></span>
          <span class="dot"></span>
      </div>
    </div>

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
</body>
</html>





