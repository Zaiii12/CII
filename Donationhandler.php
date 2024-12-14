<?php

include 'Process/db_connect.php';

$db = new Database();
$conn = $db->conn;

session_start();

if (!isset($_SESSION['donator_id'])) {
    header("Location: Nlogin.php");
    exit();
}

$donator_id = $_SESSION['donator_id']; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['food_type'])) {

        $food_type = $_POST['food_type'];
        $amount_of_serving = $_POST['amount_of_serving'];
        $date_donated = $_POST['date_donated'];

        $sql_food = "INSERT INTO p_food (food_type, amount_of_serving, date_donated, donator_id) 
                     VALUES ('$food_type', '$amount_of_serving', '$date_donated', '$donator_id')";

        if ($conn->query($sql_food) === TRUE) {
            header("Location: Thankyou.php");
            exit();
        } else {
            echo "Error inserting into p_food table: " . $conn->error . "<br>";
            echo "SQL Query: " . $sql_food;
        }
    }

    elseif (isset($_POST['apparel'])) {

        $apparel = $_POST['apparel'];
        $size = $_POST['size'];
        $gender = $_POST['gender'];

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

    elseif (isset($_POST['money_amount'])) {

        $money_amount = $_POST['money_amount'];
        $currency = $_POST['currency'];
        $date_donated = $_POST['date_donated'];

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
