<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Involvement Initiative</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="C2.css">
    <style>
      
        :root {
            --primary-color: #D6AA9F;
            --secondary-color: #F4E2D1;
            --text-color: #423736;
        }

        body {
            font-family: 'Arial', sans-serif;
            color: var(--text-color);
            margin: 0;
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
            opacity: 1.10;
        }

        .hero-section {
            background-color: var(--primary-color);
            padding: 8rem 2rem;
            text-align: center;
        }

        .hero-title {
            font-size: 3.6rem;
            margin-bottom: 1.5rem;
            color: var(--text-color);
        }

        .forms {
            display: flex;
            justify-content: center;
            padding: 8rem;
        }

        .forms form {
            width: 40%;
            padding: 1.5rem;
            border: 1px solid var(--text-color);
            border-radius: 10px;
            background-color: #fff;
        }

        .forms label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .forms input {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid var(--text-color);
            border-radius: 4px;
        }

        .forms button {
            display: block;
            width: 100%;
            padding: 0.5rem;
            background-color: var(--primary-color);
            border: none;
            color: var(--text-color);
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            border-radius: 4px;
        }

        .forms button:hover {
            background-color: var(--text-color);
            color: white;
        }
    </style>
</head>
<body>
    <?php
    $site_title = "Community Involvement Initiative";
    $hero_title = "Build a Better Future Now";
    $hero_text = "Join our community initiative to help those in need through various donation programs";
    $cta_text = "Start Donating";
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
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Log In</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

   

    <!-- Forms Section -->
    <section class="forms">
        <form action="dbp_login.php" method="post">
            <fieldset>
                <legend>Donator Information</legend>
                <label for="d_firstname">Donator First Name:</label>
                <input type="text" id="d_firstname" name="d_firstname" required>

                <label for="d_lastname">Donator Last Name:</label>
                <input type="text" id="d_lastname" name="d_lastname" required>

                <label for="d_phone">Phone Number:</label>
                <input type="text" id="d_phone" name="d_phone" required>

                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Log in</button>
            </fieldset>
        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
