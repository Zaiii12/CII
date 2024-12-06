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
        // Insert into the 'money' table from 'p_money', do not insert the primary key (money_id)
        $approve_sql = "INSERT INTO money (money_amount, currency, date_donated, donator_id)
                        SELECT money_amount, currency, date_donated, donator_id
                        FROM p_money WHERE donator_id = $donation_id AND status = 'Pending'";

        if ($conn->query($approve_sql) === TRUE) {
            // No need to update money_id in p_money, just update status
            $update_sql = "UPDATE p_money SET status = 'Approved' WHERE donator_id = $donation_id";
            if ($conn->query($update_sql) === FALSE) {
                echo "Error updating p_money status: " . $conn->error;
            }
        } else {
            echo "Error: " . $conn->error;
        }
    } elseif ($action == 'reject') {
        // If rejecting, just update the status without inserting
        $reject_sql = "UPDATE p_money SET status = 'Rejected' WHERE donator_id = $donation_id";
        if ($conn->query($reject_sql) === FALSE) {
            echo "Error rejecting donation: " . $conn->error;
        }
    }

    // Redirect back to the admin page after handling the action
    header("Location: Adminsuccess.php");
    exit();
}

// Query to get all pending donations
$sql = "SELECT * FROM p_money WHERE status = 'Pending'";
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
                    <th>Amount</th>
                    <th>Currency</th>
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
                        echo "<td>" . htmlspecialchars($row['money_amount']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['currency']) . "</td>";
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

