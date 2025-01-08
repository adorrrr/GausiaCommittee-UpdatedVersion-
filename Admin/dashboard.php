<?php
session_start();
include("../PHP/connection.php");

// Check if the user is not logged in or is not an admin
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] !== 'admin') {
    header("Location: /gausiacommittee/login.php");
    exit();
}




// Query to count total volunteers
$sql = "SELECT COUNT(*) AS total_volunteers FROM volunteers"; // Ensure the table name matches
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error); // Error handling
}

$total_volunteers = 0; // Default value
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_volunteers = $row['total_volunteers'];
}




// Query to sum total donations
$sql_donations = "SELECT SUM(amount) AS total_donations FROM Donations"; 
$result_donations = $conn->query($sql_donations);

if (!$result_donations) {
    die("Query failed: " . $conn->error); // Error handling
}

$total_donations = 0; // Default value
if ($result_donations->num_rows > 0) {
    $row = $result_donations->fetch_assoc();
    $total_donations = $row['total_donations'];
}



// Fetch donations
$sql = "SELECT fname, email, amount, item, address FROM Donations";
$result = $conn->query($sql);




// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $task_name = $_POST['task_name'] ?? '';
    $task_details = $_POST['task_details'] ?? '';
    $deadline = $_POST['deadline'] ?? '';

    // Validate inputs
    if (empty($task_name) || empty($deadline)) {
        die("Task Name and Deadline are required.");
    }

    $stmt = $conn->prepare("INSERT INTO tasks (title, description, deadline) VALUES (?, ?, ?)");
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }
    $stmt->bind_param("sss", $task_name, $task_details, $deadline);

    if ($stmt->execute()) {
        
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();

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
            <div class="main-content">
                <!-- Cards Section -->
                <div class="cards"><?php
                echo "<div class='card'>
                        <div class='card-icon'>
                            <i class='fa fa-users' aria-hidden='true'></i>
                        </div>
                        <h3>Total Volunteers</h3>
                        <p>$total_volunteers</p>
                      </div>"; ?>

        
                    <div class="card">
                        <div class="card-icon">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                        </div>
                        <h3>Tasks Assigned</h3>
                        <p>45</p>
                    </div>
        
                    <div class="card">
                        <div class="card-icon">
                            <i class="fa fa-hand-holding-heart" aria-hidden="true"></i>
                        </div>
                        <h3>Donations</h3>
                        <p>$<?php echo number_format($total_donations, 2); ?></p> <!-- Display total donations -->
                    </div>

                </div>
        
                <div>
                    <!-- Task Assignment Form -->
                    <div class="task-form-container">
                        <h2>Assign a Task</h2>
                        <form class="task-form" action="" method="POST">
                            <div class="form-group">
                                <label for="task_name">Task Name:</label>
                                <input type="text" id="task_name" name="task_name" placeholder="Enter task name" required>
                            </div>
                            <div class="form-group">
                                <label for="task_details">Task Details:</label>
                                <textarea id="task_details" name="task_details" rows="4" placeholder="Enter task details"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="deadline">Deadline:</label>
                                <input type="date" id="deadline" name="deadline" required>
                            </div>
                            <button type="submit" class="btn-submit">Assign Task</button>
                        </form>
                    </div>
                    <div class="donation-table-container">
                        <h2>Last Donations</h2>
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
            </div>
        </div>
    </div> 
    <script src="./js/logout.js"></script>
</body>
</html>


