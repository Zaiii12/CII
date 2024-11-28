<!DOCTYPE html>

<?php 
include 'Process/db_connect.php';
session_start();  
?>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="Stylesheet" href="C2.css">
<h1 class="h1">Community Involvement Initiative</h1>
</head>
<body>

    <nav class="nav">
        <div>
            <ul>
                <li><a href="Main.php">Home</a></li>
                <li><a href="Donation.php">Donate</a></li>
                <li><a href="Aboutus.html">About Us</a></li>
                <li><a href="logout.php">Log out</a></li>
            </ul>
        </div>
    </nav>
    <h2 class = "dt" >Please fill out these forms</h2>
    <div class="Forms">
    <div class ="FoodForm">
        <form action="dbp_clothes.php" method="POST">
            <fieldset>
                <legend>Clothes Donation Information</legend>
                
                <label for="apparel">Apparel Type: </label>
                <input type="text" id="apparel" name="apparel" required>
                <br><br>
                
                <label for="size">Size: </label>
                <input type="text" id="size" name="size" required>
                <br><br>
                <label for="gender">Gender: </label>
                <input type="text" id="gender" name="gender" required>
                <br><br>
                <div class = "submit">
                <button type="submit">Submit Donation</button>
                </div>
            </fieldset>
        </form>
    </div>
    <div class ="forms">
        <form></form>
    </div>
</body>
</html>