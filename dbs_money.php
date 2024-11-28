<?php
include 'Process/db_connect.php'; 

if ($_SERVER['REQUEST_METHOD'] == "GET") { 
    $sql = "SELECT * FROM money"; 
    $result = $conn->query($sql); 

    
    echo '<p>
    <span style="margin-left: 25px; margin-right: 80px; font-weight: bold;">Money Amount</span>
    <span style="margin-right: 100px; font-weight: bold;">Currency</span>
    <span style="font-weight: bold;">Date Donated </span>
    </p>';

    if ($result && $result->num_rows > 0) { 
        while ($row = $result->fetch_assoc()) {    


            echo '<p>
                <span style="margin-left: 25px; margin-right: 150px;">' . htmlspecialchars($row['money_amount']) . '</span>
                <span style="margin-right: 125px;">' . htmlspecialchars($row['currency']) . '</span>
                <span>' . htmlspecialchars($row['date_donated']) . '</span>
                </p>';
        }
    } else {
        echo '<p>No Money Donation found.</p>'; 
    }
}

$conn->close(); 
?>

