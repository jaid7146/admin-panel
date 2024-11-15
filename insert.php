<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
<form action="" method="POST">
    <input type="text" placeholder="enter name" name="name">
    <BR>
    <BR>
    <input type="text" placeholder="enter course" name="course">
    <BR>
    <BR>
    <input type="text" placeholder="enter batch" name="batch">
    <BR>
    <BR>
    <input type="text" placeholder="enter city" name="city">
    <BR>
    <BR>
    <input type="text" placeholder="enter year" name="year">
    <BR>
    <BR>
    <button>add new student</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST[''];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $city = $_POST['city'];
    $year = $_POST['year'];

 #connection file
    include("./connect.php");

    // P SQL statement
    $student = $conn->prepare("INSERT INTO clg (name, course, batch, city, year) VALUES (?, ?, ?, ?, ?)");


    $student->bind_param("sssss", $name, $course, $batch, $city, $year);


    if ($student->execute()) {
        echo "Data inserted successfully!";
    } else {
        echo "Operation failed: " . $student->error; 
    }

    $student->close();
}
?>














