<?php

include 'Process/db_connect.php';
session_start();  


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $d_firstname = $conn->real_escape_string($_POST['d_firstname']);
    $d_lastname = $conn->real_escape_string($_POST['d_lastname']);
    $d_phone = $conn->real_escape_string($_POST['d_phone']);
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    $sql_donator = "INSERT INTO donator (d_firstname, d_lastname, d_phone, username, password) 
                    VALUES ('$d_firstname', '$d_lastname', '$d_phone', '$username', '$password')";

    if ($conn->query($sql_donator) === TRUE) {
        $donator_id = $conn->insert_id;

        $sql_user = "INSERT INTO users (username, password, donator_id) 
                     VALUES ('$username', '$password', '$donator_id')";

        if ($conn->query($sql_user) === TRUE) {
            header("Location: Login.php");
            exit();
        } else {

            echo "Error inserting into users table: " . $conn->error;
        }

    } else {

        echo "Error inserting into donator table: " . $conn->error;
    }

    $conn->close();
}
?>
