<?php
session_start();
include("../PHP/connection.php");
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] !== 'admin') {
    header("Location: /gausiacommittee/login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gausia Committee Bangladesh</title>
    <link rel="stylesheet" href="./css/dashboard.css">
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="icon" href="../assets/logo - Copy.png">
</head>
<body>
    <div id="layout">
        <aside>
            <p><b>Menu</b></p>
            <a href="dashboard.php">
                <i class="fa fa-user-o" aria-hidden="true"></i>
                <b>Dashboard</b>
            </a>
            <a href="adminProfile.php">
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <b>Profile</b>
            </a>
            <a href="donation.php">
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <b>Donation</b>
            </a>
            <a href="requestVolunteer.php">
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <b>Volunteer Request</b>
            </a>
            <a href="../home.html">
                <i class="fa fa-trash-o" aria-hidden="true"></i>
                <b id="logoutButton">Logout</b>
            </a>
        </aside>
        
        <div id="content">
            <div class="admin-profile-container">
                <div class="profile-card">
                    <div class="profile-avatar">
                        <img src="../assets/admin.png" alt="Admin Avatar">
                    </div>
                    <h2>Admin Name</h2>
                    <p class="admin-email">admin@example.com</p>
                    <p class="admin-role">Role: Super Admin</p>
                    <button class="edit-profile-btn">Edit Profile</button>
                </div>
            
                <div class="dashboard-actions">
                    <h3>Quick Actions</h3>
                    <div class="actions-grid">
                        <a href="dashboard.php" class="action-card">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <p>Dashboard</p>
                        </a>
                        <a href="../error404.html" class="action-card">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                            <p>View Tasks</p>
                        </a>
                        <a href="donation.php" class="action-card">
                            <i class="dashboard.html" aria-hidden="true"></i>
                            <p>View Donations</p>
                        </a>
                        <a href="../home.html" class="action-card">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                            <b id="logoutButton">Logout</b>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>  
    
    
<script src="./js/logout.js"></script>
</body>
</html>