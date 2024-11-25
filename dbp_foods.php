<?php
session_start();  


if (!isset($_SESSION['donator_id'])) {
    header("Location: login.php");
    exit();
}

include 'Process/db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $donator_id = $_SESSION['donator_id'];

    $food_type = $conn->real_escape_string($_POST['food_type']);
    $amount_of_serving = $conn->real_escape_string($_POST['amount_of_serving']);
    $date_donated = $conn->real_escape_string($_POST['date_donated']);

    $sql = "INSERT INTO food (food_type, amount_of_serving, date_donated, donator_id) 
            VALUES ('$food_type', '$amount_of_serving', '$date_donated', '$donator_id')";

    if ($conn->query($sql) === TRUE) {
        header("Location: Thankyou.php"); 
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
