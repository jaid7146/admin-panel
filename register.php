
<!DOCTYPE html>
<html lang="en">
<?php
include("./config.php");
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <!-- First Name -->
                            <div class="mb-3">
                                <label for="fname" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your first name" required>
                                
                            </div>
                            <!-- Last Name -->
                            <div class="mb-3">
                                <label for="lname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter your last name" required>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                                <small class="text-muted">Your email is safe with us.</small>
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                                <small class="text-muted">Do not share your password.</small>
                            </div>
                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">submit</button>
                            </div>
                        </form>
                        <div class="d-flex justify-content-between mt-2">
                    <a href="login.php" class="Register-form-link"> Please click to login here</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $user_password = md5($_POST['password']);
        $register = "INSERT INTO  register (FirstName ,LastName,Email,Password) VALUES ('$fname', '$lname', '$email', '$user_password')";
        if ($conn->query($register) === TRUE) {
            $_SESSION['success_msg'] = "Registration successful.Please Login with your Credentials.";
            header("Location: login.php");
        } else {
            echo "Error: " . $register . "<br>" . $conn->error;
        }
        $conn->close();
    }
    ?>