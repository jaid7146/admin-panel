<?php
ob_start();
    session_start();
include("./header.php");
    include("./config.php"); 
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM register WHERE Id = $id";
    $result = $conn->query($sql);

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        $FirstName=$row['FirstName'];
        $LastName = $row['LastName'];
        $Email = $row['Email'];
        $_SESSION['edit_msg'] = "User Update successfully!.";
    } else {
        echo "No user found.";
        exit;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];

    $update = "UPDATE register SET FirstName = '$firstName', LastName = '$lastName', Email = '$email' WHERE Id = $id";
    
    if (mysqli_query($conn, $update)) {
        header("Location: user.php"); 
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>
<style>
    h3 {
        font-size: 1.8rem;
        color: #333;
        text-align: center;
        /* margin-bottom: 20px; */
        margin-top: 5%;
    }

    form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #f9f9f9;
    }

    label {
        display: block;
        font-size: 1rem;
        color: #555;
        margin-bottom: 6px;
    }

    input[type="text"],
    input[type="email"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 1rem;
    }

    button[type="submit"] {
        width: 100%;
        padding: 10px;
        font-size: 1.1rem;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
<h3>Edit User</h3>
<form method="post">
    <label>First Name:</label>
    <input type="text" name="firstName" value="<?php echo $FirstName;?>" required>
    <br>
    <label>Last Name:</label>
    <input type="text" name="lastName" value="<?php echo  $LastName; ?>" required>
    <br>
    <label>Email:</label>
    <input type="email" name="email" value="<?php echo  $Email; ?>" required>
    <br>
    <button type="submit">Update User</button>
</form>
<?php
mysqli_close($conn);
?>
<?php
ob_end_flush();
?>
