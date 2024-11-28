<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CII Project</title>
    <link rel="stylesheet" href="CC1.css">
</head>

<body>
    <!--<h1 class="h1">Community Involvement Initiative</h1>-->

    <nav class="nav">
        <div>
            <ul>
                <!--ILAGAY NALANG SA ISANG FILE ITONG MGA NAKALAGAY SA HEADER AND PAKIAYOS NG PAGGAMIT NG DIV-->
                <li><a href="Main.php">Home</a></li>
                <li><a href="Donation.php">Donate</a></li>
                <li><a href="Aboutus.html">About Us</a></li>
            </ul>
            <div class = "welcome">
                <h1>Welcome to our Website.</h1>
            </div>
        </div>
    </nav>
    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus nesciunt aut inventore, quae voluptatibus unde fugit tempore dignissimos dolores suscipit deleniti quo. Corporis corrupti aspernatur animi provident sint, recusandae totam?</p>
    <div class = "btn">
        <a href="Donation.php">Donate</a>
        <a href="Aboutus.html">Learn More</a>
    </div>
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

