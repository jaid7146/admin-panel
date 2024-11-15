<?php
include("./connect.php");

// Get the city value from the query parameter
$cityToEdit = $_GET['city'];

// SQL query to fetch the record to edit
$sql = "SELECT name, course, batch, city, year FROM clg WHERE city = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $cityToEdit);
$stmt->execute();
$result = $stmt->get_result();

// Check if record exists
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "No record found";
    exit();
}

// Display form with existing data
?>
<form method="post" action="update.php">
    <input type="hidden" name="original_city" value="<?php echo $row['city']; ?>">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><BR>
    Course: <input type="text" name="course" value="<?php echo $row['course']; ?>"><br><BR>
    Batch: <input type="text" name="batch" value="<?php echo $row['batch']; ?>"><br><BR>
    City: <input type="text" name="city" value="<?php echo $row['city']; ?>"><br><BR>
    Year: <input type="text" name="year" value="<?php echo $row['year']; ?>"><br><BR>
    <input type="submit" value="Update">
</form>
