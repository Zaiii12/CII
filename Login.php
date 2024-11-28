<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CII Project</title>
    <link rel="stylesheet" href="CC1.css">
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
    <div class="welcome">
        <h1>Welcome to the Community Involvement Initiative</h1>
    </div>

    <div class="Login">
        <fieldset>
            <legend>Log In</legend>
            <form action="dbp_login.php" method="POST">
                
                <label for="username">Username: </label>
                <input type="text" id="username" name="username" required>
                <br><br>

                <label for="password">Password: </label>
                <input type="password" id="password" name="password" required>
                <br><br>

                <div class="submit">
                    <button type="submit">Log In</button>
                </div>
                
            </form>
        </fieldset>
    </div>
</body>
</html>
