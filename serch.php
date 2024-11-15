<?php
include("./connect.php");

// Handle delete operation
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

// Initialize variables for search
$search_name = "";

// If search form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search'])) {
    $search_name = $_POST['name'];
}

// SQL query to fetch data (search by name if provided, otherwise fetch all)
if (!empty($search_name)) {
    // Fetch records that match the search name
    $sql = "SELECT name, course, batch, city, year FROM clg WHERE name LIKE ?";
    $stmt = $conn->prepare($sql);
    $like_name = "%" . $search_name . "%";
    $stmt->bind_param("s", $like_name);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    // Fetch all records if no search is performed
    $sql = "SELECT name, course, batch, city, year FROM clg";
    $result = $conn->query($sql);
}

?>

<!-- Search Form -->
<form method="post" action="">
    <input type="text" name="name" placeholder="Enter name to search" value="<?php echo htmlspecialchars($search_name); ?>">
    <input type="submit" name="search" value="Search">
</form>

<?php
// Display results
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>name</th>
                <th>batch</th>
                <th>city</th>
                <th>year</th>
                <th>Actions</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["name"] . "</td>
                <td>" . $row["batch"] . "</td>
                <td>" . $row["city"] . "</td>
                <td>" . $row["year"] . "</td>
                <td>
                    <form method='post' style='display:inline;'>
                        <button type='submit' name='delete' value='" . $row["city"] . "'>Delete</button>
                    </form>
                    <form method='get' action='edit.php' style='display:inline;'>
                        <input type='hidden' name='city' value='" . $row["city"] . "'>
                        <button type='submit'>Edit</button>
                    </form>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No results found";
}

// Close connection
$conn->close();
?>
    