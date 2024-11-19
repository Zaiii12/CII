<?php

require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $food_type = $conn->real_escape_string($_POST['food_type']);
    $amount_of_serving = $conn->real_escape_string($_POST['amount_of_serving']);
    $date_donated = $conn->real_escape_string($_POST['date_donated']);

    $sql = "INSERT INTO food (food_type, amount_of_serving, date_donated) VALUES ('$food_type', '$amount_of_serving', '$date_donated')";

    if ($conn->query($sql) === TRUE) {
        header("Location: Main.php");
        exit();
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>