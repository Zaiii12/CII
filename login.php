
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Login Form</title> 
</head>
<body>
    
<div  class="wrapper loginform">

    <div class="form-box login">

        <form method="post" id="loginForm" onsubmit="handleLoginSubmit(event);">
            <h1>LOG IN</h1>
            <div class="underline"></div>

            <div class='input-box'>
                <input type='username' name="username"  placeholder='Username'   value=""/>
                <i class="fas fa-envelope icon"></i>
            </div>
            <div class='input-box'>
                <input type='password' name="password" placeholder='Password'   value=""/>
                <i class="fas fa-lock icon"></i>
            </div>


            <button type='submit' name="login" id='login' value="login">Login</button>

        </form>
    </div>
        

</body>
</html>
