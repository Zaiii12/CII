<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CII Project</title>
    
    <link rel="stylesheet" href="MainHTML.css">
    <!-- Since this is main HTML page we use MainHTML.css
        If we're going to design the Dono/Status pages please use Dono.css
        Possibly make a few more .css files for the Members and Thank you page
        for seperate customization if needed. -->
</head>
<html>
<body>
<div class="login-container">
    <h2>Login</h2>
    <form action="login.php" method="POST"> 
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
    </form>
</div>
<?php


?>

</body>
</html>
