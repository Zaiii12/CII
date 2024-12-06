<?php
include 'Process/db_connect.php';
$db = new Database();
$conn = $db->conn;

session_destroy();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['username']) && isset($_POST['password'])) {
        
        $username = $conn->real_escape_string($_POST['username']);
        $password = $conn->real_escape_string($_POST['password']);

        // Check the admins table for a match
        $sql = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";
        
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $user = $result->fetch_assoc();
            
            session_start();
            
            $_SESSION['admin_id'] = $user['admin_id']; 
            
            header("Location: Admin_review.php");
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
