<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Check</title>
</head>
<body>
    <h1>Age Check</h1>

    <form method="POST" action="">
        <label for="age">Enter your age:</label>
        <input type="number" name="age" id="age" required>
        <BR><BR>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $age = $_POST['age'];

        // Check if the user is an adult or a kid
        if ($age < 18 ) {
            echo "<p>You are a kid age is $age</p>";
        }elseif ($age > 18) {
            echo "<p>you are a adult age is $age</p>";
        }else {
           echo "<p>invalid entry</p>";


        }
    }
    ?>
</body>
</html>
