<!DOCTYPE html>

<?php 
require 'db_connect.php';
?>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="Stylesheet" href="CCC2.css">
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
    <div class ="FoodForm">
        <form action="dbp_foods.php" method="post">
            <fieldset>
                <legend>Food Donation Information</legend>
                
                <label for="food_type">Food Type: </label>
                <input type="text" id="food_type" name="food_type" required>
                <br><br>
                
                <label for="amount_of_serving">Amount of serving: </label>
                <input type="text" id="amount_of_serving" name="amount_of_serving" required>
                <br><br>
                
                <label for="date_donated">Donation Date: </label>
                <input type="date" id="date_donated" name="date_donated" required>
                <br><br>

                <div class = "submit">
                <button type="submit">Submit Donation</button>
                </div>
            </fieldset>
        </form>

    </div>
    </div>


    </div>
</body>
</html>