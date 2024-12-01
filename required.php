<?php
session_start();


if (isset($_SESSION['user_id'])) {
    header("Location: home.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'signup') {
            header("Location: signup.php");
            exit();
        } elseif ($_POST['action'] == 'no_thanks') {
            header("Location: home.php");
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Required</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e9d5b7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 8;
        }
        .container {
            background-color: #bdd1c5;
            padding: 2rem;
            border-radius: 80px;
            box-shadow: 0 7px 50px;
            text-align: center;
        }
        h1 {
            color: #2e4156;
            margin-bottom: 0rem;
        }
        .btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            margin: 0.5rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s;
        }
        .btn-primary {
            background-color: #d6aa9f;
            color: white;
        }
        .btn-secondary {
            background-color: #c0c8ca;
            color: #2e4156;
        }
        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>You must sign up before you can continue.</h1>
        <button id="loginBtn" class="btn btn-primary">Register</button>
    </div>

    <script>
        document.getElementById('loginBtn').addEventListener('click', function() {
            Swal.fire({
                title: 'Login Required',
                text: 'You need to register first. Would you like to sign up?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonText: 'Sign Up',
                cancelButtonText: 'No, thanks',
                confirmButtonColor: '#d6aa9f',
                cancelButtonColor: '#c0c8ca',
            }).then((result) => {
                if (result.isConfirmed) {
                   
                    window.location.href = 'registration.php';
                } else {
              
                    window.location.href = 'mf.php';
                }
            });
        });
    </script>
</body>
</html>