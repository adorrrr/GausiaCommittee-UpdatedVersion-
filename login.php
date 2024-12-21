<?php include("PHP/connection.php"); ?>

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
                        <li><a href="contactus.html">Contact</a></li>
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
          <!-- Login form container -->
          <form action="#" method="POST" autocomplete="off">
            <h3>Log in with</h3>
            
            <div class="login_option">
              <!-- Google button -->
              <div class="option">
                <a href="error404.html">
                  <img src="data:image/png;base64,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" alt="Google" />
                  <span>Google</span>
                </a>
              </div>
            
              <!-- Apple button -->
              <div class="option">
                <a href="error404.html">
                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAACoCAMAAABt9SM9AAAAeFBMVEX///8AAAD8/Pz39/fs7Oz09PS5ubmvr6/c3NzR0dG8vLzKysqnp6dvb29hYWFWVlY9PT2YmJh9fX0wMDA1NTVRUVHp6elERETY2NiFhYVzc3OhoaGTk5OoqKh/f39bW1sLCwsdHR0pKSkWFhYiIiLGxsaLi4s7Ozsa4oFzAAAFD0lEQVR4nO2d6XLqMAyFs0AT9oayQ2kopX3/N7wQyhZkkktiyVL1/YYZ+YzjyNKx43mKoiiKoiiKoigWCRsBdQgsCOJk8Ob7M+o4GNAapn5GizoS54m+/BMq1mMS/woV6xEvqa9ilWMy9m+JqSNyl8jPo6mDid6dVj51SK4SvN5r9UEdlKOEb/da+SvqqNwkGAFa6csQJv8a1CXLzBDUakEdlpO8gFrpUwgxgbV6o47LSaawWBF1XC5yn7hnbKnjcpEQ1spvUwfmIitYqyl1XC5imlgT6sBcJIG1SqjjcpINqNWYOiwn6YBapU3quJxkAYqlLTAQUKsddVRuEkNavVBH5ShL1ao8wJKlmbuJ+z20ru1G8lJNNWcwEuS00rz9Ac0bqca6H3zEtViDDnU0jnN+DDdztTUUsvH97XjYhZQKwj/ndAhn7WS+Xgzn3U6j5F+CWXf4uskm3Od0mHT+xguyEeVyzkVUuIS3VoDnYRGVFZopzSXYtHldmfUKOosU+k+WgHXlTrAZ4B86MVqC86Q1N/8loyczuY9h68KF8Utu8Z6sPgv+cmAg75XZfDCrLvQvesVJGaUyFiHlyOrH0DOFJkrSCpu7NeTMMiOpMBj2/2voTzCkHmJtxFvbWu1fjEIexbZ9qfZsRGRd7yha7RGQc0EFdVULpvxrsDoj6sFWBO4t26JHPdxKGLyO1uhSD7gKX8Xjq5M552LXGlWqDes9dQtVqz7naYX8EC6pR1sNg33PDsz7+w1Mrbifu8Bc3bl3FzEnFns/0jeeVuyPa+bdHRbhb2I2HICzAftigwd0RS3B/5wY3vLOvS7jYZb8uGcNewZYWr1Sj7Q6zeJR1gT7FAuxQJryLjVkoC1ZEpqrH1hiSejbo1WyBPShTad2a+eHeqQ1AB7rssGceqQ1gONu8CVsdRDtDQLSd6/ICFobEhySpSyRdSDhXA+aWPxLWZ5n3RWpYqlYdpFgjUQTS8ICjyaWhNQBTSwJRQe01IG10+8XNLEk1P7QtjsSLuLsYoklIdHC690z97AdwDOT8na+Z+C1DQV8owHRbySgyQreem8FAS0LtBSev/UW9dwcf2fIDk8s/tkD6mkw9i/E0ncy1AD7XAttK32Ae6sVrc2awbwGiOZ2OMK8Fo8rVsrbegRfvG2NLetaDWamdSDlvG6h+dnOcG5eoNlKzzA+HIabPGRM2b4U8Z9Dn/HkQjuRcs32nXrYz4FmLL0lZVk7JXkOfa6FZvjLl9ahHvZzIO8Pf+Ha0cc7+nsF19t7EA+Vn+HrfiAQi+/9PahX9xzhW5BH7Ez/wvnkE+IdK0fY7g49VIdIBu/PlyNPLd5Wb9ypxb2DiPpC5LxiZSBcb35iTT3WyiCm8bz7YRngx2NsIOEEAZajRsDdUJ7xO/Z1w7XckOP/vnTyJPxX9yMYVcAt9SBrA8Fiyt+He8Z6W+ybeoQ1YnvXI8ANf4Xlq9rY73NusZo/sHd35yn6YF8FpGQNF0JrO+op9dAsYC3bYu2QNGHJOSlkm5PHSm4qbnE/YaEiz7epWkjt37Vga/UrQ81zS7RWJRoYH9/RrtNqddrv88LUjPsJp0IeuScHUc76Hyc/D34u4S7JAmJDLfAj/83tI42u4XT6WGR+dQewT/xKHuyFZ8BBoC1P6+gTTG7fium8qHQXtG/1GjF1cD9HMzqt3v1uySNKs/fe5vi8LjkfanqSRhzzNnIoiqIoiqIotfAPMn1L3B4ltyUAAAAASUVORK5CYII=" alt="Apple" />
                  <span>Apple</span>
                </a>
              </div>
            </div>
          
            <!-- Login option separator -->
            <p class="separator">
              <span>or</span>
            </p>
          
            <!-- Email input box -->
            <div class="input_box">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="Enter email address" required />
            </div>
          
            <!-- Paswwrod input box -->
            <div class="input_box">
              <div class="password_title">
                <label for="password">Password</label>
                <a href="error404.html">Forgot Password?</a>
              </div>
              <input type="password" id="password" name="password" placeholder="Enter your password" required />
            </div>
          
             <!-- Login button -->
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


<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    if ($email === "ador@gmail.com" && $password === "adorr") {
        header('location: adminDashboard.php'); 
        exit();
    }


    $query = "SELECT * FROM volunteer WHERE email = '$email' AND password = '$password'";
    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);

    if ($total == 1) {
        header('location: volunteer.php'); 
        exit();
        
    } else {
        header('location: error404.html'); 
        exit();
    }
}
?>
