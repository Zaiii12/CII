<!DOCTYPE html>
<html lang="en">
<?php
session_start();  
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Community Involvement Initiative</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card p-4 text-center">
                    <div class="card-body">
                        <i class="bi bi-check-circle-fill success-icon mb-3"></i>
                        <h1 class="card-title mb-3">Thank You!</h1>
                        <p class="card-text mb-4">
                             Your contribution has been successfully processed and will make a real difference in our community.
                        </p>
                        <a href="Main.php" class="btn btn-primary btn-lg d-block mb-3">Return Home</a>
                        <a href="Donation.php" class="btn btn-outline-secondary btn-lg d-block">Submit Another Donation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<style>
        body {
            background-color: #2E4156;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            background-color: white;
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .success-icon {
            font-size: 4rem;
            color: #0C6478;
        }
        .btn-primary {
            background-color: #0C6478;
            border-color: #0C6478;
        }
        .btn-primary:hover {
            background-color: #094d5a;
            border-color: #094d5a;
        }
        .btn-outline-secondary {
            color: #0C6478;
            border-color: #E8B298;
        }
        .btn-outline-secondary:hover {
            background-color: #a36361;
            color: white;
        }
    </style>
</html>

