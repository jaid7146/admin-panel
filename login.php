<<<<<<< HEAD
<?php
session_start();
?>
<?php
include("./config.php");
?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <?php
                if (isset($_SESSION['logout_msg'])) {
                    echo '<div id="logoutAlert" class="alert alert-danger" role="alert" style="position: absolute; z-index: 1050; width: 100%;">' . $_SESSION['logout_msg'] . '</div>';
                    unset($_SESSION['logout_msg']);
                }
                if (isset($_SESSION['success_msg'])) {
                    echo '<div id="successAlert" class="alert alert-success" role="alert" style="position: absolute; z-index: 1050; width: 100%;">' . $_SESSION['success_msg'] . '</div>';
                    unset($_SESSION['success_msg']);
                }
                if (isset($_SESSION['login_fail'])) {
                    echo '<div id="loginAlert" class="alert alert-danger" role="alert" style="position: absolute;  height: 16%;  width: 100%;">' . $_SESSION['login_fail'] . '</div>';
                    unset($_SESSION['login_fail']);
                }
                ?>
                <script>
                    window.onload = function() {
                        var alertIds = ['logoutAlert', 'successAlert', 'loginAlert'];

                        alertIds.forEach(function(id) {
                            var alertElement = document.getElementById(id);
                            if (alertElement) {
                                setTimeout(function() {
                                    alertElement.style.display = 'none';
                                }, 5000);
                            }
                        });
                    };
                </script>
                <div class="card-header text-center">
                    <h4>Login</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
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
                    <div class="d-flex justify-content-between mb-2">
                        <a href="register.php" class="Login-form-link"> Please click to Register here</a>
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
    $email = $_POST['email'];
    $user_password = md5($_POST['password']);
    $checkUser = "SELECT * FROM register WHERE  Email = '$email' AND Password = '$user_password'";
    $result = $conn->query($checkUser);
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc(); // Fetch the user data
        $_SESSION['email'] = $user['Email'];
        $_SESSION['Fullname'] = $user['FirstName'] .' '.$user['LastName'];
        $_SESSION['welcome_msg'] = "Login successful. Welcome, " . $user['Email'] . "!";
        header("Location: welcome.php");
        exit();
    } else {
        $_SESSION['login_fail'] = "<p>Invalid email or password. Please try again.</p>";
        header("Location: login.php");
    }
    $conn->close();
}

?>

