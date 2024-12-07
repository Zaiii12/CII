<?php

include 'Process/db_connect.php'; 
$db = new Database(); 
$conn = $db->conn; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (isset($_POST['username']) && isset($_POST['password'])) {
        

        $username = $conn->real_escape_string($_POST['username']);
        $password = $conn->real_escape_string($_POST['password']);


        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

        $result = $conn->query($sql);


        if ($result && $result->num_rows > 0) {
            $user = $result->fetch_assoc();
            

            session_start();

            $_SESSION['username'] = $username;  
            $_SESSION['donator_id'] = $user['donator_id'];  


            header("Location: Donation.php");
            exit();

        } else {
            echo "Invalid username or password.";
        }
        
    } else {
        echo "Username and password are required.";
    }
}


$conn->close();
?>


