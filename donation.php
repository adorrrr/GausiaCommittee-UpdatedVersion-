<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gausia Committee Bangladesh</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <link rel="icon" href="./assets/logo - Copy.png">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/donation.css">

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
                <h1>Donation</h1>
            </div>
        </div>
        
        <div id="donation-section">
            <div id="donation">
                <h4>Latest Causes</h4>
                <h1>Find The Pepuler Causes <br>And Donate Them</h1>
            </div>
            <div class="card-grid">
                <!-- Card 1 -->
                <div class="card">
                  <img src="assets/doctors-working-together-medical-research.jpg" alt="Cause Image">
                  <div class="card-content">
                    <h3>Medical</h3>
                    <p>Donate For Poor People's Treatment And Medicine.</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Medical Sector">
                      Donate Now
                    </button>
                  </div>
                </div>
                <!-- Card 2 -->
                <div class="card">
                  <img src="assets/beggars-sitting-street-with-homeless-messages-please-help.jpg" alt="Cause Image">
                  <div class="card-content">
                    <h3>Homeless</h3>
                    <p>Children We Work With Need Shelter.</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Homeless Sector">
                      Donate Now
                    </button>
                  </div>
                </div>
                <!-- Card 3 -->
                <div class="card">
                  <img src="assets/arab-people-demonstrating-together.jpg" alt="Cause Image">
                  <div class="card-content">
                    <h3>Education</h3>
                    <p>Help Underprivileged Kids Get an Education.</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Education Sector">
                      Donate Now
                    </button>
                  </div>
                </div>
                <!-- Card 4 -->
                <div class="card">
                  <img src="assets/african-kid-marketplace.jpg" alt="Cause Image">
                  <div class="card-content">
                    <h3>Food</h3>
                    <p>Provide Food for Those in Need.</p><br>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Food Sector">
                      Donate Now
                    </button>
                  </div>
                </div>
                <!-- Card 5 -->
                <div class="card">
                  <img src="assets/medium-shot-boy-drinking-water.jpg" alt="Cause Image">
                  <div class="card-content">
                    <h3>Water</h3>
                    <p>Support Clean Water Projects Worldwide.</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Water Sector">
                      Donate Now
                    </button>
                  </div>
                </div>
                <!-- Card 6 -->
                <div class="card">
                  <img src="assets/man-sat-bent-his-knees-put-his-hands-his-head-base-tree-surrounded-by-water.jpg.jpg" alt="Cause Image">
                  <div class="card-content">
                    <h3>Environment</h3>
                    <p>Protect Our Planet for Future Generations.</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Environment Sector">
                      Donate Now
                    </button>
                  </div>
                </div>
              </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Donate</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Add action to specify where to send form data -->
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="name" class="col-form-label">Name:</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-form-label">Email:</label>
                                <input type="email" name="email" class="form-control" id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="amount" class="col-form-label">Amount:</label>
                                <input type="number" name="amount" class="form-control" id="amount" required>
                            </div>
                            <div class="form-group">
                                <label for="product" class="col-form-label">Product Item:</label>
                                <select class="form-control" name="item" id="product" required>
                                    <option value="" disabled selected>Select</option>
                                    <option value="Cash">Cash</option>
                                    <option value="Clothe">Clothe</option>
                                    <option value="Food">Food</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="location" class="col-form-label">Location:</label>
                                <input type="text" class="form-control" name="address" id="location" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="donate" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
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
    <script src="./js/homeSlider.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <script>
      $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget); 
      var recipient = button.data('bs-whatever') || ''; 
 
      var modal = $(this);
      var title = recipient ? 'Donate for ' + recipient : 'New Entry';
      modal.find('.modal-title').text(title); 
      modal.find('#name').val(''); 
      modal.find('#email').val(''); 
      modal.find('#amount').val(''); 
      modal.find('#product').val('Select'); 
      modal.find('#location').val(''); 
      });

    </script>


  </body>
</html>



<?php 
include("PHP/connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['donate'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $amount = mysqli_real_escape_string($conn, $_POST['amount']);
    $item = mysqli_real_escape_string($conn, $_POST['item']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    $query = "INSERT INTO DONATIONS (fname, email, amount, item, address) 
              VALUES ('$fname', '$email', '$amount', '$item', '$address')";

    $data = mysqli_query($conn, $query);


}
?>
