<?php
// Assuming you already have a database connection
include 'Process/db_connect.php';

$db = new Database();
$conn = $db->conn;

session_start();

// Ensure the user is logged in
if (!isset($_SESSION['donator_id'])) {
    header("Location: Nlogin.php");
    exit();
}

$donator_id = $_SESSION['donator_id'];

// Check if the form is submitted and contains the necessary data
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['food_type'])) {
    // Get form data
    $food_type = $_POST['food_type'];
    $amount_of_serving = $_POST['amount_of_serving'];
    $date_donated = $_POST['date_donated']; // This should be explicitly passed from the form

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
?>

