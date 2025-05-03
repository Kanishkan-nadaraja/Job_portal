<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: whitesmoke;
        }

        /* Navbar */
        .navbar {
            background-color: #e6f0ff;
        }

        .navbar-brand img {
            height: 40px;
            margin-left: -200px;
        }

        .navbar-nav {
            margin-left: 500px;
        }

        .navbar-nav .nav-item {
            margin-right: 20px;
        }

        .navbar-nav .nav-link {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #FF6A13;
        }

        /* Hero Section */
        .hero-section {
            width: 100%;
            height: 400px;
            background: url('assets/images/Smart-City.jpg') no-repeat center center;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .hero-overlay {
            background-color: rgba(0, 0, 0, 0.6);
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

        /* Job Seekers and Recruiters Login buttons */
        .position-absolute {
            right: 40px;
            top: 10px;
            z-index: 10;
        }

        .btn-login {
            font-size: 14px;
            padding: 10px 20px;
            margin: 5px;
        }

        .btn-dark {
            background-color: #343a40;
            border-color: #343a40;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        /* Register Form Section */
        .register-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: -150px;
        }

        .register-box {
            display: flex;
            background-color: #dcdcdc;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            width: 100%;
            max-width: 1400px;
            height:600px;
        }

        .register-box .image-box {
            flex: 1.5;
            background: url('assets/images/employer_register.jpg') no-repeat center center;
            background-size: cover;
        }

        .register-box .form-box {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .register-box header {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        /* Form Styling */
        .row.field {
            display: flex;
            justify-content: space-between;
        }

        .field {
            margin-bottom: 15px;
            flex: 1;
            padding-right: 10px;
        }

        .field label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        .field input,
        .field textarea {
            width: 100%;
            padding: 12px 20px;
            border: 2px solid #ddd;
            border-radius: 25px;
            font-size: 14px;
            background-color: #f9f9f9;
            transition: all 0.3s ease-in-out;
        }

        .field input:focus {
            border-color: #FF6A13;
            background-color: #fff;
            box-shadow: 0 0 8px rgba(255, 106, 19, 0.6);
            outline: none;
        }

        .form-box .btn {
            background: #FF6A13;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
            width: 100%;
            text-align: center;
        }

        .form-box .btn:hover {
            background: #FF4500;
        }

        .form-box .links {
            text-align: center;
            margin-top: 15px;
        }

        .form-box .links a {
            color: #4f4f4f;
            text-decoration: none;
            font-weight: bold;
        }

        .form-box .links a:hover {
            text-decoration: underline;
        }

        .message {
            background: #f8d7da;
            color: #721c24;
            padding: 10px;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            margin-bottom: 15px;
            text-align: center;
        }

        .footer {
            background-color: #ffffff;
            padding: 30px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/itsthe1.png" alt="XpressJobs">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Jobs</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Explore</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Job Seekers and Recruiters Login Buttons -->
    <div class="position-absolute">
        <a class="btn btn-dark btn-login" href="employer_login.php">RECRUITERS LOGIN</a>
        <a class="btn btn-success btn-login" href="index.php">JOB SEEKERS LOGIN</a>
    </div>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-overlay d-flex flex-column justify-content-center align-items-center text-center">
            <h1 class="fw-bold">Give your Career a Jumpstart</h1>
            <p>ItsThe1 Solutions is Sri Lanka’s premier Job Board trusted by over 8500 organizations</p>
        </div>
    </div>

    <!-- Registration Form Section -->
    <div class="register-container">
        <div class="register-box">
            <div class="image-box"></div>
            <div class="form-box">
                <?php
                include("php/config.php");
                if (isset($_POST['submit'])) {
                    $business_name = $_POST['business_name'];
                    $email = $_POST['email'];
                    $registration_number = $_POST['registration_number'];
                    $phone = $_POST['phone'];
                    $details = $_POST['details'];

                    // Verifying the unique email
                    $verify_query = mysqli_query($con, "SELECT Email FROM employers WHERE Email='$email'");

                    if (mysqli_num_rows($verify_query) != 0) {
                        echo "<div class='message'>
                                  <p>This email is already in use. Try another one!</p>
                              </div> <br>";
                        echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                    } else {
                        mysqli_query($con, "INSERT INTO employers(BusinessName, Email, BusinessRegNo, Phone, Details) 
                                           VALUES('$business_name', '$email', '$registration_number', '$phone', '$details')")
                            or die("Error Occurred");

                        echo "<div class='message'>
                                  <p>Registration successful!</p>
                              </div> <br>";
                        echo "<a href='index.php'><button class='btn'>Login Now</button>";
                    }
                } else {
                ?>
                    <header>Employer Registration</header>
                    <form action="" method="post">
                        <div class="row field">
                            <div class="field">
                                <label for="business_name">Business Name</label>
                                <input type="text" name="business_name" id="business_name" autocomplete="off" required>
                            </div>

                            <div class="field">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" autocomplete="off" required>
                            </div>
                        </div>

                        <div class="row field">
                            <div class="field">
                                <label for="registration_number">Business Registration Number</label>
                                <input type="text" name="registration_number" id="registration_number" autocomplete="off" required>
                            </div>

                            <div class="field">
                                <label for="phone">Phone Number</label>
                                <input type="text" name="phone" id="phone" autocomplete="off" required>
                            </div>
                        </div>

                        <div class="row field">
                            <div class="field">
                                <label for="details">Required Details</label>
                                <textarea name="details" id="details" rows="3" autocomplete="off" required></textarea>
                            </div>
                        </div>

                        <div class="row field">
                            <div class="field">
                                <input type="submit" class="btn" name="submit" value="Register" required>
                            </div>
                        </div>

                        <div class="links">
                            Already a member? <a href="index.php">Sign In</a>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
