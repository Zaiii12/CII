   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Involvement Initiative</title>
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
                        <a class="nav-link" href="#">Log In</a>
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

<!-- Mission & Vision Section -->
<section class="py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Mission Card -->
                <div class="col-md-6">
                    <div class="card mission-vision-card h-100 shadow-sm">
                        <div class="card-body text-center p-5">
                           
                            <h2 class="card-title text-navy mb-4">Our Mission</h2>
                            <p class="card-text">
                                To empower and strengthen communities through sustainable development initiatives, 
                                fostering collaboration, and providing essential support to those in need. We strive 
                                to create lasting positive change by mobilizing resources and volunteers to address 
                                critical social challenges.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Vision Card -->
                <div class="col-md-6">
                    <div class="card mission-vision-card h-100 shadow-sm">
                        <div class="card-body text-center p-5">
                        
                            <h2 class="card-title text-navy mb-4">Our Vision</h2>
                            <p class="card-text">
                                We envision a world where every community thrives through mutual support, 
                                understanding, and collective action. Our goal is to build a future where 
                                resources are shared equitably, where every individual has access to basic 
                                necessities, and where community spirit drives positive social transformation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center text-navy mb-5">Our Core Values</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card mission-vision-card h-100 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="icon-circle bg-navy">
                                
                            </div>
                            <h3 class="card-title h4 text-navy">Community First</h3>
                            <p class="card-text">Prioritizing the needs and well-being of our community members in
                                 every decision and action.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mission-vision-card h-100 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="icon-circle bg-rose">
                               
                            </div>
                            <h3 class="card-title h4 text-navy">Integrity</h3>
                            <p class="card-text">Maintaining transparency and ethical standards in
                                all our operations and relationships.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mission-vision-card h-100 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="icon-circle bg-gold">
                               
                            </div>
                            <h3 class="card-title h4 text-navy">Excellence</h3>
                            <p class="card-text">Striving for the highest standards in our programs and service delivery to the community.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-navy text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Community Involvement Initiative</h5>
                    <p>Making a difference in communities across the world</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <h5>Contact Us</h5>
                    <p>Email: info@communityinitiative.org<br>
                    Phone: +924 5924 9481</p>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p>&copy; <?php echo date("Y"); ?> Community Involvement Initiative. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
            padding: 8rem 2rem;
            text-align: center;
            position: relative;
        }

        .hero-title {
            font-size: 3.6rem;
            margin-bottom: 1.5rem;
            color: var(--text-color);
        }

        .hero-text {
            font-size: 1.3rem;
            margin-bottom: 3rem;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
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

        .bg-navy { background-color: var(--navy); }
        .bg-rose { background-color: var(--rose); }
        .bg-gold { background-color: var(--gold); }
        
        .text-navy { color: var(--navy); }
        .text-rose { color: var(--rose); }
        .text-gold { color: var(--gold); }

    
        .mission-vision-card {
            border: none;
            border-radius: 60px;
            transition: transform 0.3s;
          
        }

        .mission-vision-card:hover {
            transform: translateY(-4px);
        }

        .icon-circle {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.6rem;
        }
   
    </style> 
</html>
