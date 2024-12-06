<?php
include_once 'Process/db_connect.php';
session_start();

// Base class to handle common operations
class AdminDonation {
    protected $conn;

    // Constructor to initialize the database connection
    public function __construct() {
        $db = new Database();
        $this->conn = $db->conn;
    }

    // Method to check if admin is logged in
    public function checkAdminSession() {
        if (!isset($_SESSION['admin_id'])) {
            header("Location: Admin_log.php");
            exit();
        }
    }

    // Method to handle the approval and rejection of donations (common method)
    public function handleDonationAction($donation_id, $action, $table, $pending_table) {
        if ($action == 'approve') {
            $approve_sql = "INSERT INTO $table (food_type, amount_of_serving, date_donated, donator_id)
                            SELECT food_type, amount_of_serving, date_donated, donator_id
                            FROM $pending_table WHERE donator_id = $donation_id AND status = 'Pending'";
            if ($this->conn->query($approve_sql) === TRUE) {
                $delete_sql = "DELETE FROM $pending_table WHERE donator_id = $donation_id";
                $this->conn->query($delete_sql);
            }
        } elseif ($action == 'reject') {
            $reject_sql = "UPDATE $pending_table SET status = 'Rejected' WHERE donator_id = $donation_id";
            $this->conn->query($reject_sql);
        }
    }

    // Method to get all pending donations (common method)
    public function getPendingDonations($table, $pending_table) {
        $sql = "SELECT * FROM $pending_table WHERE status = 'Pending'";
        return $this->conn->query($sql);
    }

    // Method to close the database connection
    public function closeConnection() {
        $this->conn->close();
    }
}

// Food Donation class
class FoodDonation extends AdminDonation {
    public function displayDonations($result) {
        echo '<p><span style="margin-left: 25px; margin-right: 60px; font-weight: bold;">Type of Food</span>
              <span style="margin-right: 60px; font-weight: bold;">Amount of Serving</span>
              <span style="font-weight: bold;">Date Donated</span></p>';

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<p>
                        <span style="margin-left: 25px; margin-right: 160px;">' . htmlspecialchars($row['food_type']) . '</span>
                        <span style="margin-right: 140px;">' . htmlspecialchars($row['amount_of_serving']) . '</span>
                        <span>' . htmlspecialchars($row['date_donated']) . '</span>
                      </p>';
            }
        } else {
            echo '<p>No Food Donation found.</p>';
        }
    }
}

// Money Donation class
class MoneyDonation extends AdminDonation {
    public function displayDonations($result) {
        echo '<p><span style="margin-left: 25px; margin-right: 80px; font-weight: bold;">Money Amount</span>
              <span style="margin-right: 100px; font-weight: bold;">Currency</span>
              <span style="font-weight: bold;">Date Donated</span></p>';

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<p>
                        <span style="margin-left: 25px; margin-right: 150px;">' . htmlspecialchars($row['money_amount']) . '</span>
                        <span style="margin-right: 125px;">' . htmlspecialchars($row['currency']) . '</span>
                        <span>' . htmlspecialchars($row['date_donated']) . '</span>
                      </p>';
            }
        } else {
            echo '<p>No Money Donation found.</p>';
        }
    }
}

// Clothes Donation class
class ClothesDonation extends AdminDonation {
    public function displayDonations($result) {
        echo '<p><span style="margin-left: 25px; margin-right: 125px; font-weight: bold;">Apparel</span>
              <span style="margin-right: 125px; font-weight: bold;">Size</span>
              <span style="font-weight: bold;">Gender</span></p>';

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<p>
                        <span style="margin-left: 25px; margin-right: 150px;">' . htmlspecialchars($row['apparel']) . '</span>
                        <span style="margin-right: 150px;">' . htmlspecialchars($row['size']) . '</span>
                        <span>' . htmlspecialchars($row['gender']) . '</span>
                      </p>';
            }
        } else {
            echo '<p>No Clothes Donation found.</p>';
        }
    }
}

// Instantiate classes for each donation type
$foodDonation = new FoodDonation();
$moneyDonation = new MoneyDonation();
$clothesDonation = new ClothesDonation();

// Check if admin is logged in
$foodDonation->checkAdminSession();
$moneyDonation->checkAdminSession();
$clothesDonation->checkAdminSession();

// Handle form submission for donation approval or rejection
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && isset($_POST['donation_id']) && isset($_POST['donation_type'])) {
    $donation_id = $_POST['donation_id'];
    $action = $_POST['action'];
    $donation_type = $_POST['donation_type'];

    // Handle donation actions based on donation type
    if ($donation_type == 'food') {
        $foodDonation->handleDonationAction($donation_id, $action, 'food', 'p_food');
    } elseif ($donation_type == 'money') {
        $moneyDonation->handleDonationAction($donation_id, $action, 'money', 'p_money');
    } elseif ($donation_type == 'clothes') {
        $clothesDonation->handleDonationAction($donation_id, $action, 'clothes', 'p_clothes');
    }

    header("Location: Adminsuccess.php");
    exit();
}

// Get all pending donations for each type
$foodResult = $foodDonation->getPendingDonations('food', 'p_food');
$moneyResult = $moneyDonation->getPendingDonations('money', 'p_money');
$clothesResult = $clothesDonation->getPendingDonations('clothes', 'p_clothes');
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
        <h2>Food Donations</h2>
        <?php $foodDonation->displayDonations($foodResult); ?>

        <h2>Money Donations</h2>
        <?php $moneyDonation->displayDonations($moneyResult); ?>

        <h2>Clothes Donations</h2>
        <?php $clothesDonation->displayDonations($clothesResult); ?>
    </main>
</body>
</html>

<?php
// Close the database connection for all instances
$foodDonation->closeConnection();
$moneyDonation->closeConnection();
$clothesDonation->closeConnection();
?>
