<?php
include_once 'Process/db_connect.php'; 

$db = new Database(); 
$conn = $db->conn; 

class Donation {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->conn;
    }

    public function displayFoodDonations() {
        $sql = "SELECT * FROM food";
        $result = $this->conn->query($sql);

        echo '<p>
        <span style="margin-left: 25px; margin-right: 60px; font-weight: bold;">Type of Food</span>
        <span style="margin-right: 60px; font-weight: bold;">Amount of Serving</span>
        <span style="font-weight: bold;">Date Donated </span>
        </p>';

        if ($result && $result->num_rows > 0) {
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


    public function displayClothesDonations() {
        $sql = "SELECT * FROM clothes";
        $result = $this->conn->query($sql);

        echo '<p>
        <span style="margin-left: 25px; margin-right: 125px; font-weight: bold;">Apparel</span>
        <span style="margin-right: 125px; font-weight: bold;">Size</span>
        <span style="font-weight: bold;">Gender</span>
        </p>';

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<p>
                    <span style="margin-left: 25px; margin-right: 150px;">' . htmlspecialchars($row['apparel']) . '</span>
                    <span style="margin-right: 150px;">' . htmlspecialchars($row['size']) . '</span>
                    <span>' . htmlspecialchars($row['gender']) . '</span>
                    </p>';
            }
        } else {
            echo '<p>No clothes found.</p>';
        }
    }


    public function displayMoneyDonations() {
        $sql = "SELECT * FROM money";
        $result = $this->conn->query($sql);

        echo '<p>
        <span style="margin-left: 25px; margin-right: 80px; font-weight: bold;">Money Amount</span>
        <span style="margin-right: 100px; font-weight: bold;">Currency</span>
        <span style="font-weight: bold;">Date Donated </span>
        </p>';

        if ($result && $result->num_rows > 0) {
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

$donation = new Donation();

//Checking kung saang webpage ididisplay//

if ($_SERVER['REQUEST_METHOD'] == "GET") {


    if (basename($_SERVER['PHP_SELF']) == "FoodST.php") {
        $donation->displayFoodDonations();
    }

    elseif (basename($_SERVER['PHP_SELF']) == "ClothesST.php") {
        $donation->displayClothesDonations();
    }

    elseif (basename($_SERVER['PHP_SELF']) == "MoneyST.php") {
        $donation->displayMoneyDonations();
    }
}
?>
