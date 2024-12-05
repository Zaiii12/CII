<?php

include 'Process/db_connect.php';
session_start();  


if (!isset($_SESSION['donator_id'])) {
    header("Location: Nlogin.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $donator_id = $_SESSION['donator_id'];

    $money_amount = $conn->real_escape_string($_POST['money_amount']);
    $currency = $conn->real_escape_string($_POST['currency']);
    $date_donated = $conn->real_escape_string($_POST['date_donated']);


    $sql = "INSERT INTO p_money (money_amount, currency, date_donated, donator_id) 
            VALUES ('$money_amount', '$currency', '$date_donated','$donator_id')";

    if ($conn->query($sql) === TRUE) {
        header("Location: Thankyou.php"); 
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
