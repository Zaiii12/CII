<!DOCTYPE html>

<?php 
// Connect Database to this. -N
// !!THIS IS FOR THE DONATION GLOBAL STAGE PAGE!!
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
    <h2 class = "dt" >Please fill out these forms</h2>

<div class ="forms">
    <form></form>
</div>
</body>
</html>