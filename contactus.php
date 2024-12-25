<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gausia Committee Bangladesh</title>
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/donation.css">
    <link rel="stylesheet" href="./css/contactus.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"/>
    <link rel="icon" href="./assets/logo - Copy.png">

</head>
<body>
    <div id="main">
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
                <button><a href="login.php">Login</a></button>
            </div>
            <div id="header">
                <h1>Contact Us</h1>
            </div>
        </div>
        
        <div class="formcarry-container">
            <h1 >Contact Us</h1>
            <!-- Form Section -->
            <form action="#" method="POST" class="formcarry-form" id="form">
              <label for="name">Your Name</label>
              <input type="text" id="name" name="fullName" required />
        
              <label for="email">Your Email Address</label>
              <input type="email" id="email" name="email" required />
        
              <label for="message">Your Message</label>
              <textarea name="message" id="message" cols="30" rows="10"></textarea>
        
              <button type="submit">Send</button>
            </form>
        
            <!-- Notification Area -->
            <div class="formcarry-alert success" id="success-alert">Form submitted successfully!</div>
            <div class="formcarry-alert error" id="error-alert">Something went wrong. Please try again.</div>
        </div>

        <div id="location">
            <div class="mapswrapper">
                <iframe loading="lazy" allowfullscreen 
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8&q=321%2C%20Didar%20Market%2Cdewan%20bazar%2C%20Chittagong.%20(2nd%20floor)&zoom=16&maptype=satellite">
                </iframe>
                <a href="https://fnfmods.net">fnf mods</a>
                <style>.mapswrapper{background:#fff;position:relative}.mapswrapper iframe{border:0;position:relative;z-index:2}.mapswrapper a{color:rgba(0,0,0,0);position:absolute;left:0;top:0;z-index:0}</style>
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
        
    </div>
    <script>
        // JavaScript to handle form submission
        const form = document.getElementById('form');
        const successAlert = document.getElementById('success-alert');
        const errorAlert = document.getElementById('error-alert');
    
        form.addEventListener('submit', (event) => {
          event.preventDefault(); // Prevent actual form submission
    
          // Simulate success (or error) notification
          try {
            successAlert.classList.add('visible'); // Show success alert
            errorAlert.classList.remove('visible'); // Hide error alert if visible
    
            // Hide notification after 3 seconds
            setTimeout(() => {
              successAlert.classList.remove('visible');
            }, 3000);
          } catch (error) {
            successAlert.classList.remove('visible'); // Hide success alert if visible
            errorAlert.classList.add('visible'); // Show error alert
          }
        });
      </script>
</body>
</html>