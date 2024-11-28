<?php
include 'Process/db_connect.php'; 

if ($_SERVER['REQUEST_METHOD'] == "GET") { 
    $sql = "SELECT * FROM food"; 
    $result = $conn->query($sql); 

    echo '<p>
    <span style="margin-left: 25px; margin-right: 60px; font-weight: bold;">Type of Food</span>
    <span style="margin-right: 60px; font-weight: bold;">Amount of Serving</span>
    <span style="font-weight: bold;">Date Donated </span>
    </p>';
    if ($result && $result->num_rows > 0) { 
        while ($row = $result->fetch_assoc()) {    


            echo '<p>
                <span style="margin-left: 25px; margin-right: 160px;">' . htmlspecialchars($row['food_type']) . '</span>
                <span style="margin-right: 140px;">' . htmlspecialchars($row['amount_of_serving']) . '</span>
                <span>' . htmlspecialchars($row['date_donated']) . '</span>
                </p>';
        }
    } else {
        echo '<p>No Food Donation found.</p>'; 
    }
}

$conn->close(); 
?>