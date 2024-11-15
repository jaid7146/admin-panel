<?php
ob_start();
session_start();
include("header.php");
include("./config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body class="w3-light-grey">
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 4%;">
            <div class="col-md-6">
                <div class="card" style="margin-top: 5%;">
                    <div class="card-header text-center">
                        <h4>Insert User</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <!-- First Name -->
                            <div class="mb-3">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter your first name" required>
                            </div>
                            <!-- Last Name -->
                            <div class="mb-3">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter your last name" required>
                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                            </div>
                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Add User</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $FirstName = $_POST['firstName'];
    $LastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $insert = "INSERT INTO register (FirstName, LastName, email, password) VALUES ('$FirstName','$LastName', '$email', '$password')";
    
    if (mysqli_query($conn, $insert)) {
        $_SESSION["user_insert"] = "New user added successfully!";
        header("Location: user.php");
        exit();
    } else {
        echo "Error: " . $insert . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
<?php
ob_end_flush();
?>