<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CII</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
        
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Login.php">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="#"><?php echo $hero_title; ?></h1>
            <p class="#"><?php echo $hero_text; ?></p>
            <a href="required.php" class="cta-button"><?php echo $cta_text; ?></a>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>


   
<style>
        :root {
            --primary-color:#D6AA9F ;
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
            margin-left: auto;
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
            padding: 14rem 2rem;
            text-align: center;
            position: relative;
        }

        .cta-button {
            background-color: #2E4156;
            color:white;
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
        
        :root {
            --navy: #2E4156;
            --rose: #987185;
            --gold: #e9d567;
        }

    
    </style> 
</html>
