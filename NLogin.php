<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CII Project</title>
    <link rel="stylesheet" href="CC1.css">
</head>

<body>

    <?php
    session_start();  


    ?>
    <nav class="nav">
        <div>
            <ul>
                <li><a href="Main.php">Home</a></li>
                <li><a href="Donation.php">Donate</a></li>
                <li><a href="Aboutus.html">About Us</a></li>

            </ul>
            <div class = "welcome">
                <h1>You are not logged in, Please Log in.</h1>
            </div>
        </div>
    </nav>
    <p class="para">You can log in by the buttons below, If you don't have an account otherwise, please register as a donator.</p>
    <div class = "btn">
        <a href="Login.php">Login</a>
        <a href="Registration.php">Register</a>
    </div>
    
</body>
</html>