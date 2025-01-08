<?php
session_start();
require_once('../PHP/connection.php');
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] !== 'admin') {
    header("Location: /gausiacommittee/login.php");
    exit();
}


// Check if the form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $volunteerId = intval($_POST['volunteer_id']); 
    $action = $_POST['action']; 

    // Validate action
    if (!in_array($action, ['approve', 'reject'])) {
        die("Invalid action.");
    }

    $newStatus = ($action === 'approve') ? 'Approved' : 'Rejected';

    $query = "UPDATE Volunteers SET status = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $newStatus, $volunteerId);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Volunteer has been {$newStatus}.";
    } else {
        $_SESSION['error'] = "Failed to update volunteer status.";
    }

    $stmt->close();
    $conn->close();

    header("Location: requestVolunteer.php");
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
            <div class="container">
                <h1>Volunteer Registration Approvals</h1>

                <!-- Display success or error messages -->
                <?php
                if (isset($_SESSION['message'])) {
                    echo "<p class='success'>{$_SESSION['message']}</p>";
                    unset($_SESSION['message']);
                }
                if (isset($_SESSION['error'])) {
                    echo "<p class='error'>{$_SESSION['error']}</p>";
                    unset($_SESSION['error']);
                }
                ?>

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
                        <?php
                        // Fetch volunteers with 'Pending' status from the database
                        $query = "SELECT id, fname, email, status FROM Volunteers WHERE status = 'Pending'";
                        $result = $conn->query($query);
            
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "
                                <tr>
                                    <td>{$row['fname']}</td>
                                    <td>{$row['email']}</td>
                                    <td>{$row['status']}</td>
                                    <td>
                                        <form method='POST' action='requestVolunteer.php' style='display:inline;'>
                                            <input type='hidden' name='volunteer_id' value='{$row['id']}'>
                                            <button type='submit' name='action' value='approve' class='btn btn-approve'>Approve</button>
                                            <button type='submit' name='action' value='reject' class='btn btn-reject'>Reject</button>
                                        </form>
                                    </td>
                                </tr>
                                ";
                            }
                        } else {
                            echo "<tr><td colspan='4'>No pending volunteers.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>


    </div>  
    <script src="./js/logout.js"></script>
</body>
</html>











