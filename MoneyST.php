<!DOCTYPE html>
<html>
<?php 
// Connect Database to this. -N
// !!THIS IS FOR THE DONATION GLOBAL STATUS PAGE!!
$servername = "localhost";
$username = "root";
$password = "";
$database = "cii";

$conn = new mysqli($servername, $username,$password,$database);

if ($conn->connect_error){
    die("Connection failed: "  . $conn-> connect_error);
}

?>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="Stylesheet" href="CC2.css">
<h1 class="h1">Community Involvement Initiative</h1>
</head>
<body>

    <nav class="nav">
        <div>
            <ul>
                <li><a href="Main.php">Home</a></li>
                <li><a href="Donation.php">Donate</a></li>
                <li><a href="Aboutus.html">About Us</a></li>
            </ul>
        </div>
    </nav>
    <h2>Donate to the Community.</h2>

    <div class ="boxleft">
        <div class ="box">Put Stats here</div>
    </div>

    <div class ="desc">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui quasi voluptatem modi, commodi iusto pariatur laborum non officia. Officia quas corrupti est, a non libero repudiandae optio. Quasi, officiis ipsa?</p>
    </div>

    <div class="btn">
        <a href="MoneyDT.php">Go to Donation Page</a>
    </div>
</body>
</html>