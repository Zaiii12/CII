<?php

require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $money_amount = $conn->real_escape_string($_POST['money_amount']);
    $currency = $conn->real_escape_string($_POST['currency']);
    $date_donated = $conn->real_escape_string($_POST['date_donated']);

    $sql = "INSERT INTO money (money_amount, currency, date_donated) VALUES ('$money_amount', '$currency', '$date_donated')";

    if ($conn->query($sql) === TRUE) {
        header("Location: Main.php");
        exit();
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>