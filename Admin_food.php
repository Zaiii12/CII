<?php

include 'Process/db_connect.php';
session_start();

$db = new Database(); 
$conn = $db->conn; 

if (!isset($_SESSION['admin_id'])) {
    header("Location: Admin_log.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && isset($_POST['donation_id'])) {
    $donation_id = $_POST['donation_id'];
    $action = $_POST['action'];

    if ($action == 'approve') {
        $approve_sql = "INSERT INTO food (food_type, amount_of_serving, date_donated, donator_id)
                        SELECT food_type, amount_of_serving, date_donated, donator_id
                        FROM p_food WHERE donator_id = $donation_id AND status = 'Pending'";

        if ($conn->query($approve_sql) === TRUE) {
            $update_sql = "UPDATE p_food SET status = 'Approved' WHERE donator_id = $donation_id AND status = 'Pending'";
            if ($conn->query($update_sql) === FALSE) {
                echo "Error updating status in p_food: " . $conn->error;
            }
        } else {
            echo "Error inserting into food table: " . $conn->error;
        }
    } elseif ($action == 'reject') {
        $reject_sql = "UPDATE p_food SET status = 'Rejected' WHERE donator_id = $donation_id";
        if ($conn->query($reject_sql) === FALSE) {
            echo "Error rejecting donation: " . $conn->error;
        }
    }

    header("Location: Adminsuccess.php");
    exit();
}

$sql = "SELECT * FROM p_food WHERE status = 'Pending'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Review Pending Donations</title>
    <link rel="stylesheet" href="CC2.css">
</head>
<body>
    <header>
        <h1>Review Pending Donations</h1>
    </header>

    <main>
        <table>
            <thead>
                <tr>
                    <th>Food Type</th>
                    <th>Amount of Serving</th>
                    <th>Date Donated</th>
                    <th>Donator ID</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['food_type']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['amount_of_serving']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['date_donated']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['donator_id']) . "</td>";
                        echo "<td>";
                        echo "<form method='POST' style='display:inline;'>
                                  <input type='hidden' name='donation_id' value='" . $row['donator_id'] . "'>
                                  <button type='submit' name='action' value='approve'>Approve</button>
                              </form>";
                        echo "<form method='POST' style='display:inline;'>
                                  <input type='hidden' name='donation_id' value='" . $row['donator_id'] . "'>
                                  <button type='submit' name='action' value='reject'>Reject</button>
                              </form>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No pending donations found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>

<?php
$conn->close();
?>
