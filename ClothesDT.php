<!DOCTYPE html>

<?php 
include 'Process/db_connect.php';

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
                <li><a href="Aboutus.php">About Us</a></li>
                <li><a href="logout.php">Log out</a></li>
            </ul>
        </div>
    </nav>
    <h2 class = "dt" >Please fill out these forms</h2>
    <div class="Forms">
    <div class ="FoodForm">
        <form action="Donationhandler.php" method="POST">
            <fieldset>
                <legend>Clothes Donation Information</legend>
                
                <label for="apparel">Apparel Type: </label>
                <select type="text" id="apparel" name="apparel" required>
                    <option value ="Top">Top</option>
                    <option value ="Pants">Pants</option>
                    <option value ="Underwear">Underwear</option>
                    <option value ="Socks">Socks</option>
                </select>
                <br><br>
                
                <label for="size">Size: </label>
                <select type="text" id="size" name="size" required>
                    <option value="XS">XS</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                </select>


                <br><br>
                <label for="gender">Gender: </label>
                <select type="text" id="gender" name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>

                <br><br>
                <div class = "submit">
                <button type="submit">Submit Donation</button>
                </div>
            </fieldset>
        </form>
    </div>

</body>
</html>