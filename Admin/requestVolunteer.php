<?php
session_start();

// Check if the user is not logged in or is not an admin
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
    <link rel="stylesheet" href="./css/request.css">
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
            <div class="container">
                <h1>Volunteer Registration Approvals</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Volunteer Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>johndoe@example.com</td>
                            <td>Pending</td>
                            <td>
                                <button class="btn btn-approve">Approve</button>
                                <button class="btn btn-reject">Reject</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Jane Smith</td>
                            <td>janesmith@example.com</td>
                            <td>Pending</td>
                            <td>
                                <button class="btn btn-approve">Approve</button>
                                <button class="btn btn-reject">Reject</button>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
    <script src="./js/logout.js"></script>
</body>
</html>











