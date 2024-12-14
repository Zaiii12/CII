<!DOCTYPE html>
<?php 
include 'Process/db_connect.php';
?>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="Stylesheet" href="CC2.css">
<style>
    body {
        margin: 0;
        padding: 0;
        background-image: url("https://static1.makeuseofimages.com/wordpress/wp-content/uploads/2019/08/websites-volunteer-jobs.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 0%;
        background-attachment: fixed;
        height: 100vh;
        backdrop-filter: blur(2px);
    }
</style>
</head>

<body>
    <nav class="nav">
        <div>
            <ul>
                <li><a href="Main.php">Home</a></li>
                <li><a href="Donation.php">Donate</a></li>
                <li><a href="Aboutus.php">About Us</a></li>
                <li><a href="logout.php">Log out</a></li>
            </ul>
        </div>
    </nav>
    <h2>Donate to the Community.</h2>

    <div class="boxleft">
        <div class="box">
            <?php include 'Showdonation.php'; ?>
        </div>
    </div>

    <div class="desc">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui quasi voluptatem modi, commodi iusto pariatur laborum non officia. Officia quas corrupti est, a non libero repudiandae optio. Quasi, officiis ipsa?</p>
    </div>

    <div class="btn">
        <a href="ClothesDT.php">Go to Donation Page</a>
    </div>
</body>
</html>
