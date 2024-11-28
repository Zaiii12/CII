<?php

include 'Process/db_connect.php';

session_start();  


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $donator_id = $_SESSION['donator_id'];

    $apparel = $conn->real_escape_string($_POST['apparel']);
    $size = $conn->real_escape_string($_POST['size']);
    $gender = $conn->real_escape_string($_POST['gender']);

    $sql = "INSERT INTO clothes (apparel, size, gender, donator_id) 
    VALUES ('$apparel', '$size', '$gender','$donator_id')";

    if ($conn->query($sql) === TRUE) {
        header("Location: Thankyou.php");
        exit();
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

