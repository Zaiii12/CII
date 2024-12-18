<!DOCTYPE html>

<?php 
include 'Process/db_connect.php';

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
                <li><a href="Aboutus.php">About Us</a></li>
                <li><a href="logout.php">Log out</a></li>
            </ul>
        </div>
    </nav>
    <h2 class = "dt" >Please fill out these forms</h2>
    <div class="Forms">

        <div class ="FoodForm">
            <form action="Donationhandler.php" method="post">
                <fieldset>
                    <legend>Money Transaction Information</legend>
                    
                    <label for="money_amount">Money Amount: </label>
                    <input type="number" id="money_amount" name="money_amount" required>
                    <br><br>
                    
                    <label for="currency">Currency: </label>
                    <select id="currency" name="currency" required>
                    <option value="">Select Currency</option>
                    <option value="PHP">PHP - Philippine Peso</option>
                    <option value="USD">USD - United States Dollar</option>
                    <option value="EUR">EUR - Euro</option>
                    <option value="GBP">GBP - British Pound</option>
                    <option value="JPY">JPY - Japanese Yen</option>
                    <option value="AUD">AUD - Australian Dollar</option>
                    </select>
                    <br><br>
                    
                    <label for="date_donated">Date Donated: </label>
                    <input type="date" id="date_donated" name="date_donated" required>
                    <br><br>

                    <div class = "submit">
                    <button type="submit">Submit Donation</button>
                    </div>
                </fieldset>
            </form>
        </div>
</body>
</html>