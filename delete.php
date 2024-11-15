<script src="js/bootstrap.bundle.min.js"></script>
<?php
session_start();
include('./config.php');
if (isset($_GET['id'])) {
    $id = ($_GET['id']);
    
    $query = "DELETE FROM register WHERE Id = $id";
    if (mysqli_query($conn, $query)) {
        $_SESSION['delete_msg'] = "User deleted successfully!";
    } else  {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
header("Location: user.php"); 
exit();
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
