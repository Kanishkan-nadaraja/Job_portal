<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Registration</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            margin: 50px;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
        }

        header {
            font-size: 28px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .field {
            margin-bottom: 15px;
        }

        .field label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        .field input, .field textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        .btn {
            display: block;
            width: 100%;
            background: #6a11cb;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #2575fc;
        }

        .links {
            text-align: center;
            margin-top: 15px;
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
    </style>
</head>
<body>
    <div class="container">
        <div class="box form-box">

        <?php 
         
         include("php/config.php");
         if(isset($_POST['submit'])){
            $business_name = $_POST['business_name'];
            $email = $_POST['email'];
            $registration_number = $_POST['registration_number'];
            $phone = $_POST['phone'];
            $details = $_POST['details'];

            // Verifying the unique email
            $verify_query = mysqli_query($con, "SELECT Email FROM employers WHERE Email='$email'");

            if(mysqli_num_rows($verify_query) != 0 ){
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
                <div class="field input">
                    <label for="business_name">Business Name</label>
                    <input type="text" name="business_name" id="business_name" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="registration_number">Business Registration Number</label>
                    <input type="text" name="registration_number" id="registration_number" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" id="phone" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="details">Required Details</label>
                    <textarea name="details" id="details" rows="3" autocomplete="off" required></textarea>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Already a member? <a href="index.php">Sign In</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>