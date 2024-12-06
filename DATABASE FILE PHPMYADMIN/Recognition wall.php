<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recognition Wall</title>
    <link rel="stylesheet" href="CC1.css">
</head>


<body>
    <h1 class = h1>Recognition Wall</h1>
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

    <div class = "donobox">
        <?php
        include 'Recogscript.php';
        ?>
    </div>
    
</body>
</html>
