<?php
include("./connect.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    $cityToDelete = $_POST['delete'];

    // SQL query to delete the record
    $delete_sql = "DELETE FROM clg WHERE city = ?";
    $stmt = $conn->prepare($delete_sql);
    $stmt->bind_param("s", $cityToDelete);
    
    if ($stmt->execute()) {
        echo "Record deleted successfully!";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // Refresh the page to show updated data
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// SQL query to fetch all records from the Users table
$sql = "SELECT *  FROM clg";
$result = $conn->query($sql);
// Check if any rows are returned
if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table border='1'>
            <tr>
                <th>name</th>
                <th>batch</th>
                <th>city</th>
                <th>year</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["name"] . "</td>
                <td>" . $row["batch"] . "</td>
                <td>" . $row["city"] . "</td>
                <td>" . $row["year"] . "</td>
                <td>
                <form method='post'>
                        <button type='submit' name='delete' value='" . $row["city"] . "'>Delete</button>
                    </form>
                    </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>




