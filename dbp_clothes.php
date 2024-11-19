<?php

require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $apparel = $conn->real_escape_string($_POST['apparel']);
    $size = $conn->real_escape_string($_POST['size']);
    $gender = $conn->real_escape_string($_POST['gender']);

    $sql = "INSERT INTO clothes (apparel, size, gender) VALUES ('$apparel', '$size', '$gender')";

    if ($conn->query($sql) === TRUE) {
        header("Location: Main.php");
        exit();
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

