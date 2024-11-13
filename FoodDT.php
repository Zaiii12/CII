<!DOCTYPE html>

<?php 
// Connect Database to this. -N
// !!THIS IS FOR THE FOOD DONATION PAGE!!
$servername = "localhost";
$username = "root";
$password = "";
$database = "cii";

$conn = new mysqli($servername, $username,$password,$database);

if ($conn->connect_error){
    die("Connection failed: "  . $conn-> connect_error);
}

?>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="Stylesheet" href="CC2.css">
<h1 class="h1">Community Involvement Initiative</h1>
<body>

    <nav class="nav">
        <div>
            <ul>
                <li><a href="Main.php">Home</a></li>
                <li><a href="Donation.php">Donate</a></li>
                <li><a href="Aboutus.html">About Us</a></li>
            </ul>
        </div>
    </nav>
    <h2 class = "dt" >Please fill out these forms</h2>


<div class="Forms">
    <div class ="DonoForm">
        <form action:="ProcessFood.php" method="post">
            <fieldset>
                <legend>Donator Information</legend>
                
                <label for="donator_id">Donator ID:</label>
                <input type="text" id="donator_id" name="donator_id" required>
                <br><br>
                
                <label for="donator_name">Donator Name:</label>
                <input type="text" id="donator_name" name="donator_name" required>
                <br><br>
                
                <label for="phone_no">Phone Number:</label>
                <input type="tel" id="phone_no" name="phone_no" required pattern="[0-9]{10}">
                <br><br>
            </fieldset>
        </form>
    </div>


    <div class ="FoodForm">
        <form action:="ProcessFood.php" method="post">
            <fieldset>
                <legend>Food Information Information</legend>
                
                <label for="food_type">Food Type:</label>
                <input type="text" id="food_type" name="food_type" required>
                <br><br>
                
                <label for="amount_of_serving">Amount of serving:</label>
                <input type="text" id="amount_of_serving" name="amount_of_serving" required>
                <br><br>
                
                <label for="Donated by">Donated by:</label>
                <input type="tel" id="Donated by" name="Donated by" required>
                <br><br>
            </fieldset>
        </form>
    </div>
    </div>

    <div class = "submit">
    <button type="submit">Submit Donation</button>
    </div>
</body>
</html>