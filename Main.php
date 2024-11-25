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
    session_start();  
    $site_title = "Community Involvement Initiative";
    $hero_title = "Make a Difference Today";
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
                        <a class="nav-link" href="Main.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Donation.php">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Aboutus.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Login.php">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Registration.php">Register</a>
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
            <a href="Donation.php" class="cta-button"><?php echo $cta_text; ?></a>
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
                            <div class="icon-circle bg-rose">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" fill="white" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                </svg>
                            </div>
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
                            <div class="icon-circle bg-gold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                </svg>
                            </div>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                </svg>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                    <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                                </svg>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
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
