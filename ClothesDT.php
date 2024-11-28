<!DOCTYPE html>

<?php 
// Connect Database to this. -N
// !!THIS IS FOR THE CLOTHES DONATION PAGE!!
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
</head>
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
                <legend>Clothes Donation Information</legend>
                
                <label for="Apparel">Apparel Type:</label>
                <input type="text" id="Apparel" name="amount_of_serving" required>
                <br><br>
                
                <label for="Size">Donated by:</label>
                <input type="tel" id="Size" name="Size" required>
                <br><br>

                <label for="Gender">Donated by:</label>
                <input type="tel" id="Gender by" name="Gender" required>
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