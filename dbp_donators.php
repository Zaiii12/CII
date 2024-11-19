<?php

require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $d_firstname = $conn->real_escape_string($_POST['d_firstname']);
    $d_lastname = $conn->real_escape_string($_POST['d_lastname']);
    $d_phone = $conn->real_escape_string($_POST['d_phone']);

    $sql = "INSERT INTO donator (d_firstname, d_lastname, d_phone) VALUES ('$d_firstname', '$d_lastname', '$d_phone')";

    if ($conn->query($sql) === TRUE) {
        header("Location: Main.php");
        exit();
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>