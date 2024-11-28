<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CII Project</title>
    <link rel="stylesheet" href="C1.css">
</head>
<html>
<body>
<div class="login-container">
    <h2>Login</h2>
    <form action="login.php" method="POST"> 
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>

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
