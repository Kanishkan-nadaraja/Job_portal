<?php
session_start();

include("php/config.php");
if (!isset($_SESSION['valid'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - XpressJobs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            width: 100%;
            height: 500px;
            /* Adjust this height as needed */
            background: url('assets/images/business-city-communication-connection.jpg') no-repeat center center;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .hero-overlay {
            background-color: rgba(0, 0, 0, 0.6);
            /* Optional: darken overlay */
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 1rem;
        }

        .hero-overlay h1 {
            font-size: 3rem;
            font-weight: 800;
        }

        .hero-overlay p {
            font-size: 1.25rem;
            font-weight: 500;
        }

        .featured-jobs {
            padding: 2rem;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #e6f0ff;">


        <div class="container">

            <a class="navbar-brand" href="#">
                <img src="assets/images/itsthe1.png" alt="XpressJobs" style="height: 40px; margin-left:-200px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="margin-left: 500px;">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Jobs</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Explore</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <!-- Buttons in top-right corner -->
        <div class="position-absolute top-0 end-0 p-3" style="right: 40px;">
            <a class="btn btn-dark me-2" href="employer_login.php">RECRUITERS LOGIN</a>
            <a class="btn btn-success" href="register.php">JOB SEEKERS LOGIN</a>
        </div>

        <!-- Centered Hero Content -->
        <div class="hero-overlay d-flex flex-column justify-content-center align-items-center text-center">
            <h1 class="fw-bold">Give your Career a Jumpstart</h1>
            <p>ItsThe1 Solutions is Sri Lanka’s premier Job Board trusted by over 8500 organizations</p>
        </div>
    </div>



    <!-- Featured Jobs Section -->
    <div class="featured-jobs container">
        <h2 class="mb-4">Featured Jobs</h2>
        <div class="row">
            <!-- Example Job Card -->
            <div class="col-md-3">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Assistant Manager – Safety</h5>
                        <p class="card-text">Nestlé – Kurunegala</p>
                        <span class="badge bg-secondary">Full Time</span>
                    </div>
                </div>
            </div>
            <!-- Add more job cards as needed -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>