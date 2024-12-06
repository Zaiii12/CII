<?php
require_once 'Process/db_connect.php'; 
$db = new Database();
$conn = $db->conn;

$sql_money = "SELECT donator_id, Count(*) AS total_donated
              FROM p_money
              GROUP BY donator_id
              ORDER BY total_donated DESC
              LIMIT 1";
              
$result_money = $conn->query($sql_money);

echo "<div style='float: left; padding-left: 20px;'>"; 

if ($result_money->num_rows > 0) {
    $row_money = $result_money->fetch_assoc();
    $donator_id_money = $row_money['donator_id'];
    $total_donated = $row_money['total_donated'];
    echo "<h1>Most Donated Donator (Money)</h1>";
    echo "<p>Donator ID: " . htmlspecialchars($donator_id_money) . "</p>";
    echo "<p>Times Donated Money: " . htmlspecialchars($total_donated) . "</p>";
} else {
    echo "<p>No money donations found.</p>";
}


$sql_clothes = "SELECT donator_id, COUNT(*) AS total_clothes
                FROM p_clothes
                GROUP BY donator_id
                ORDER BY total_clothes DESC
                LIMIT 1";

$result_clothes = $conn->query($sql_clothes);

if ($result_clothes->num_rows > 0) {
    $row_clothes = $result_clothes->fetch_assoc();
    $donator_id_clothes = $row_clothes['donator_id'];
    $total_clothes = $row_clothes['total_clothes'];
    echo "<h1>Most Donated Donator (Clothes)</h1>";
    echo "<p>Donator ID: " . htmlspecialchars($donator_id_clothes) . "</p>";
    echo "<p>Times Donated Clothes: " . htmlspecialchars($total_clothes) . "</p>";
} else {
    echo "<p>No clothes donations found.</p>";
}


$sql_food = "SELECT donator_id, COUNT(*) AS total_food
             FROM p_food
             GROUP BY donator_id
             ORDER BY total_food DESC
             LIMIT 1";

$result_food = $conn->query($sql_food);

if ($result_food->num_rows > 0) {
    $row_food = $result_food->fetch_assoc();
    $donator_id_food = $row_food['donator_id'];
    $total_food = $row_food['total_food'];
    echo "<h1>Most Donated Donator (Food)</h1>";
    echo "<p>Donator ID: " . htmlspecialchars($donator_id_food) . "</p>";
    echo "<p>Times Donated Food: " . htmlspecialchars($total_food) . "</p>";
} else {
    echo "<p>No food donations found.</p>";
}

$conn->close();
echo "</div>";
?>
