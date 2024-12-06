<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="Stylesheet" href="CC1.css">
</head>
<body>

 <?php
    include 'Process/db_connect.php';
    session_start();
 ?>
 <div class="ALogin">
        <fieldset>
            <legend>Admin Login</legend>
            <form action="Adminlog.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <br><br>
                <label for="password">Password:</label>
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