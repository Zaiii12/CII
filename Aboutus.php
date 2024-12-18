<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Community Involvement Initiative</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
              margin: 0;
              padding: 0;
              background-image: url("https://featherfist.org/wp-content/uploads/2020/12/FP-featherfist-homeless-Donate1.jpg");
              background-repeat: no-repeat;
              background-size: cover;
              background-position: 0%;
              background-attachment: fixed;
              height: 100vh;
              backdrop-filter:blur(2px);
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f4e6d6;
            color: #2d3748;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2%rem;
        }

        .footer {
            background-color: #2d3748; 
            color: #fff; /* Footer text color */
            padding: 2rem 1rem; /* Add padding for better spacing */
            width: 100%; /* Ensure full-width */
        }

        .header {
            text-align: center;
            margin-bottom: 1rem;
        }

        .header h1 {
            font-size: 2.5rem;
            color: #2d3748;
            margin-bottom: 1rem;
        }

        .header p {
            font-size: 1.2rem;
            color: #4a5568;
            max-width: 800px;
            margin: 0 auto;
        }

        .mission-section {
            background-color: #fff;
            padding: 3rem;
            border-radius: 10px;
            margin-bottom: 4rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .team-card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .team-card:hover {
            transform: translateY(-5px);
        }

        .team-image {
            width: 100%;
            height: 30px; 
            background-color: #2d3748;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden; 
        }

        .team-info img {
            width: 100%; 
            height: auto;
            object-fit: cover; 
            border-top-left-radius: 10px; 
            border-top-right-radius: 10px;
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .team-info h2 {
            color: #2d3748;
            margin-bottom: 0.5rem;
        }

        .team-info p {
            color: #4a5568;
            font-size: 0.9rem;
        }

        .values-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .value-card {
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .value-card i {
            font-size: 2.5rem;
            color: #2d3748;
            margin-bottom: 1rem;
        }

        .footer {
            background-color: #2d3748;
            color: #fff;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: start;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .footer-left h2 {
            margin-bottom: 1rem;
        }

        .footer-right {
            text-align: right;
        }

        .copyright {
            text-align: center;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        @media (max-width: 768px) {
            .footer-content {
                flex-direction: column;
                text-align: center;
            }

            .footer-right {
                text-align: center;
            
            }
        }
    </style>
</head>
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
            <a class="navbar-brand" href="Main.php"><?php echo $site_title; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
        
                    <li class="nav-item">
                        <a class="nav-link" href="Home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Login.php">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="Recognition wall.php">Recognition Wall</a></li>

                </ul>
            </div>
        </div>
    </nav>


   
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

       
    </style> 
</html>
<body>
    <div class="container">
        <div class="header">
            <h1>About Our Team</h1>
            <p>Empowering communities through collective action and support</p>
        </div>

        <div class="mission-section">
            <h2>Goal</h2>
            <p>At Community Involvement Initiative, we strive to create meaningful connections between
                 people and causes that matter. Through our platform, we facilitate various forms of community
                  support including food donations, financial assistance, and material contributions to those in need.</p>
        </div>

        <div class="team-grid">
            <div class="team-card">
                <div class="team-image">
                    
                </div>
                <div class="team-info">
                <img src="Imgs/kurtpic.jpg">
                    <h2>Kurt Steven Victorino</h2>
                    <h>Executive Director</h>
                    <p>Leading our initiatives with over 15 years of experience in community 
                        development and nonprofit management.</p>
                </div>
            </div>
            <div class="team-card">
                <div class="team-image">
                    x
                </div>
                <div class="team-info">
                <img src="Imgs/kyla_pic.png">
                    <h2>Kyla Tomoc</h2>
                    <h>Operations Manager</h>
                    <p>Ensuring smooth execution of our programs and maintaining strong relationships with 
                        community partners.</p>
                </div>
            </div>
            <div class="team-card">
                <div class="team-image">
                    
                </div>
                <div class="team-info">
                <img src="Imgs/nolepic.png">
                    <h2>Jan Nole Matres</h2>
                    <h>Community Outreach Coordinator</h>
                    <p>Building bridges between our initiative and the communities we serve through 
                        effective communication and engagement.</p>
                </div>
            </div>
        </div>

    

        <footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-left">
                <h2>Community Involvement Initiative</h2>
                <p>Making a difference in communities across the world.</p>
            </div>
            <div class="footer-right">
                <h3>Contact Us</h3>
                <p>Email: info@communityinitiative.org</p>
                <p>Phone: +924 5924 9481</p>
            </div>
        </div>
        <div class="copyright">
            © 2024 Community Involvement Initiative. All rights reserved.
        </div>
    </div>
</footer>
</body>
</html>