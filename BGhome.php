<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Involvement Initiative</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" href="">
</head>

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


<style>
        :root {
            --primary-color:#D6AA9F ;
            --text-color: #423736;
        }
        body {
              background-image: url("https://cdn.discordapp.com/attachments/1302931578762035253/1313161317842030644/BG3.jpg?ex=674f2047&is=674dcec7&hm=481abbaec1f965b95633d668e70f4460c6526f3e489821bb6616025cc373bc0d&");
              background-repeat: no-repeat;
              background-size: cover;
              background-position: 0%;
              background-attachment: fixed;
              height: 100vh;
              backdrop-filter:blur(2px);
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
