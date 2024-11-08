<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/lore.css">
    <title>Register Form</title>
</head>
<body>

<div class="wrapper form">
    <div class="form-box register">
            <form method="post" id="registerForm" onsubmit="handleRegisterSubmit(event)">
                <h1>REGISTER</h1>
                <div class="underline"></div>
                <div class='input-box'>     <!-- INPUT FIELD -->
                    <input type='text' name="fname" placeholder='First Name' value =""  />
                    <i class="fas fa-user icon"></i>
                </div>
                
                <div class='input-box'> <!-- INPUT FIELD -->
                    <input type='text' name="lname" placeholder='Last Name' value= "" />
                    <i class="fas fa-user icon"></i>
                </div>


                <div class='input-box'><!-- INPUT FIELD -->
                    <input type='email' name="email" placeholder='Email' value="" />
                    <i class="fas fa-envelope icon"></i>
                </div>
                
                <div class='input-box'><!-- INPUT FIELD -->
                    <input type='password' name="pass" placeholder='Password' value="" />
                    <i class="fas fa-lock icon"></i>
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox" />I agree to the terms & conditions</label>
                </div>
                <!-- REGISTER BUTTON -->
                <button type='submit' id='signup'>Register</button>

                <div class="login">
                    <p>Already have an account? <a href="#" onclick="location.href='./login.php'">Log in</a></p>
                </div>
            </form>
        </div>
    </div>
</div>



</body>
</html>