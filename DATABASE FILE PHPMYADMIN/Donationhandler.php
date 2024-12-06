<?php
// Include the database connection
include 'Process/db_connect.php';

// Initialize database connection
$db = new Database();
$conn = $db->conn;

session_start();

// Ensure the user is logged in
if (!isset($_SESSION['donator_id'])) {
    header("Location: Nlogin.php");
    exit();
}

$donator_id = $_SESSION['donator_id']; // Retrieve the donator_id from session

// Check if the form is submitted and contains valid data
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Handle food donation
    if (isset($_POST['food_type'])) {
        // Get food donation details from the form
        $food_type = $_POST['food_type'];
        $amount_of_serving = $_POST['amount_of_serving'];
        $date_donated = $_POST['date_donated'];

        // Step 1: Insert the food type into the 'food' table to get the food_id
        $sql_food = "INSERT INTO food (food_type, amount_of_serving, date_donated, donator_id) 
                     VALUES ('$food_type', '$amount_of_serving', '$date_donated', '$donator_id')";

        if ($conn->query($sql_food) === TRUE) {
            // Get the food_id from the food table
            $food_id = $conn->insert_id; // This gets the food_id of the newly inserted food item

            // Step 2: Insert the donation record into the 'p_food' table
            $sql_donation = "INSERT INTO p_food (food_id, food_type, amount_of_serving, date_donated, donator_id) 
                             VALUES ('$food_id', '$food_type', '$amount_of_serving', '$date_donated', '$donator_id')";

            if ($conn->query($sql_donation) === TRUE) {
                // Redirect to thank you page after successful donation
                header("Location: Thankyou.php");
                exit();
            } else {
                // If the donation insert fails, display the error message
                echo "Error inserting into p_food table: " . $conn->error . "<br>";
                echo "SQL Query: " . $sql_donation;
            }
        } else {
            // If the food insert fails, display the error message
            echo "Error inserting into food table: " . $conn->error . "<br>";
            echo "SQL Query: " . $sql_food;
        }
    }

    // Handle apparel donation
    elseif (isset($_POST['apparel'])) {
        // Get apparel donation details from the form
        $apparel = $_POST['apparel'];
        $size = $_POST['size'];
        $gender = $_POST['gender'];

        // Insert into p_clothes table without the date_donated field
        $sql = "INSERT INTO p_clothes (apparel, size, gender, donator_id) 
                VALUES ('$apparel', '$size', '$gender', '$donator_id')";

        if ($conn->query($sql) === TRUE) {
            header("Location: Thankyou.php");
            exit();
        } else {
            echo "Error inserting into p_clothes table: " . $conn->error . "<br>";
            echo "SQL Query: " . $sql;
        }
    }

    // Handle money donation
    elseif (isset($_POST['money_amount'])) {
        // Get money donation details from the form
        $money_amount = $_POST['money_amount'];
        $currency = $_POST['currency'];
        $date_donated = $_POST['date_donated'];

        // Insert into p_money table with the date_donated field
        $sql = "INSERT INTO p_money (money_amount, currency, date_donated, donator_id) 
                VALUES ('$money_amount', '$currency', '$date_donated', '$donator_id')";

        if ($conn->query($sql) === TRUE) {
            header("Location: Thankyou.php");
            exit();
        } else {
            echo "Error inserting into p_money table: " . $conn->error . "<br>";
            echo "SQL Query: " . $sql;
        }
    } else {
        echo "No valid donation data received.";
    }
}
?>
