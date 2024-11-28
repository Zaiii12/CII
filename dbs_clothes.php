<?php
include 'Process/db_connect.php'; 

if ($_SERVER['REQUEST_METHOD'] == "GET") { 
    $sql = "SELECT * FROM clothes"; 
    $result = $conn->query($sql); 

    echo '<p>
    <span style="margin-left: 25px; margin-right: 125px; font-weight: bold;">Apparel</span>
    <span style="margin-right: 125px; font-weight: bold;">Size</span>
    <span style="font-weight: bold;">Gender</span>
    </p>';

    if ($result && $result->num_rows > 0) { 
        while ($row = $result->fetch_assoc()) {    

            echo '<p>
                <span style="margin-left: 25px; margin-right: 150px;">' . htmlspecialchars($row['apparel']) . '</span>
                <span style="margin-right: 150px;">' . htmlspecialchars($row['size']) . '</span>
                <span>' . htmlspecialchars($row['gender']) . '</span>
                </p>';
        }
    } else {
        echo '<p>No clothes found.</p>'; 
    }
}

$conn->close(); 
?>


