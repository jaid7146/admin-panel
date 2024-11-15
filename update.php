<?php
include("./connect.php");
// Get the updated form data
$original_city = $_POST['original_city'];
$name = $_POST['name'];
$course = $_POST['course'];
$batch = $_POST['batch'];
$city = $_POST['city'];
$year = $_POST['year'];

// SQL query to update the record
$sql = "UPDATE clg SET name = ?, course = ?, batch = ?, city = ?, year = ? WHERE city = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $name, $course, $batch, $city, $year, $original_city);

if ($stmt->execute()) {
    echo "Record updated successfully!";
} else {
    echo "Error updating record: " . $conn->error;
}

// Redirect back to the main page
header("Location: delect.php");  // Assuming index.php is your main page
exit();

$conn->close();
?>
