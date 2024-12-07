<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Involvement Initiative</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
              margin: 0;
              padding: 0;
              background-image: url("https://i0.wp.com/hbculifestyle.com/wp-content/uploads/2012/07/Why-Volunteering-is-Great-for-Teens.jpg?fit=456,304&ssl=1");
              background-repeat: no-repeat;
              background-size: cover;
              background-position: 0%;
              background-attachment: fixed;
              backdrop-filter:blur(2px);
        }

        :root {
            --primary-color: #D6AA9F;
            --secondary-color: #F4E2D1;
            --text-color: #423736;
        }

        body {
            font-family: 'Arial', sans-serif;
            color: var(--text-color);
        }

        .navbar {
            background-color: var(--secondary-color);
            padding: 1rem 2rem;
        }

        .navbar-brand {
            font-size: 1.4rem;
            color: var(--text-color);
        }

        .nav-link {
            color: var(--text-color);
            margin: 0.1rem;
            transition: opacity 0.1s;
        }

        .nav-link:hover {
            opacity: 1.1;
        }

        .hero-section {
            background-color: var(--primary-color);
            padding: 14rem 2rem;
            text-align: center;
        }

        .hero-title {
            font-size: 3.6rem;
            margin-bottom: 1.5rem;
        }

        .hero-text {
            font-size: 1.3rem;
            margin-bottom: 3rem;
            max-width: 500px;
            margin: 0 auto;
        }

        .cta-button {
            background-color: #2E4156;
            color: white;
            padding: 1rem 2.6rem;
            border-radius: 40px;
            text-decoration: none;
            font-weight: bold;
            transition: transform 0.4s;
        }

        .cta-button:hover {
            transform: translateY(-4px);
            color: #E9D5B7;
        }

        .welcome {
            text-align: center;
            margin: 5rem 0;
            font-weight: bold;
        }

        .Login {
            max-width: 350px;
            margin: 2rem auto;
            padding: 4rem;
            border: 1px solid var(--text-color);
            border-radius: 8px;
            background-color: var(--secondary-color);
            text-align: center;
        }

        .Login legend {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 1rem;
          
        }

        .Login label {
            display: block;
            margin: 0.5rem 0;
        }

        .submit {
            text-align: center;
            margin-top: 1rem;
        }

        .submit button {
            background-color: #2E4156;
            color: white;
            padding: 0.9rem 1.5rem;
            border-radius: 30px;
            border: none;
            font-weight: bold;
            cursor: pointer;
        }

        .submit button:hover {
            color: #E9D5B7;
        }
    </style>
    </style>
</head>
<body>
    <?php
        $site_title = "Community Involvement Initiative";
        session_start(); 
    ?>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#"><?php echo $site_title; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Main.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Registration.php">Register
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Aboutus.php">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Welcome Section -->
    <div class="welcome">
        <h1>WELCOME BACK!</h1>
    </div>

    <!-- Login Section -->
    <div class="Login">
        <fieldset>
            <legend>User Login</legend>
            <form action="dbp_login.php" method="POST">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
