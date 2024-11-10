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
                <div class='input-box'>    
                    <input type='text' name="fname" placeholder='First Name' value =""  />
            
                </div>
                
                <div class='input-box'> 
                    <input type='text' name="lname" placeholder='Last Name' value= "" />
                    
                </div>


                <div class='input-box'>
                    <input type='email' name="email" placeholder='Email' value="" />
                   
                </div>
                
                <div class='input-box'>
                    <input type='password' name="pass" placeholder='Password' value="" />
                   
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox" />I agree to the terms & conditions</label>
                </div>
                
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