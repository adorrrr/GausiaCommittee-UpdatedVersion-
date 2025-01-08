<?php
session_start();
include("../PHP/connection.php");
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] !== 'admin') {
    header("Location: /gausiacommittee/login.php");
    exit();
}


$sql = "SELECT fname, email, amount, item, address FROM Donations";
$result = $conn->query($sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gausia Committee Bangladesh</title>
    <link rel="stylesheet" href="./css/dashboard.css">
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
            <div class="donation-table-container">
                <h2>Donations</h2>
                <table class="donation-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Amount</th>
                            <th>Item</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . htmlspecialchars($row['fname']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                                echo "<td>$" . htmlspecialchars($row['amount']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['item']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['address']) . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>No donations found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div> 
    <script src="./js/logout.js"></script>
</body>
</html>