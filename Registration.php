<!DOCTYPE html>

<?php
include 'Process/db_connect.php';
require 'dbp_donators.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CII Project</title>
    <link rel="stylesheet" href="CC2.css">
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

<h2 class = "dt" >Please fill out these forms</h2>

<div class="Forms">
<div class ="DonoForm">
    <form action:="dbp_login.php" method="post">
        <fieldset>
            <legend>Donator Information</legend>
            
            <label for="d_firstname">Donator First Name:</label>
            <input type="text" id="d_firstname" name="d_firstname" required>
            <br><br>
            
            <label for="d_lastname">Donator Last Name:</label>
            <input type="text" id="d_lastname" name="d_lastname" required>
            <br><br>
            
            <label for="d_phone">Phone Number:</label>
            <input type="text" id="d_phone" name="d_phone" required>
            <br><br>

            <label for="username">Username: </label>
            <input type="text" id="username" name="username" required>
            <br><br>

            <label for="password">Password: </label>
            <input type="text" id="password" name="password" required>
            <br><br>

            <div class = "submit">
                <button type="submit">Log in</button>
                </div>
        </fieldset>
    </form>
</div>
    
</body>
</html>