<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body class="w3-light-grey">
<?php
session_start();
include("header.php");
include("./config.php");
?>
<?php
$searchQuery = "";
if (isset($_POST['search'])) {
    $searchQuery = $_POST['search'];
}
?>
<div class="w3-container w3-card-4 w3-white" style="margin-top: 4%; margin-bottom: 44px; width: 75%; margin-left: 81%; transform: translateX(-77%);">
    <form method="POST" action="" style="width: 100%; margin-top: 10px;">
        <label for="searchBox" style="font-size: 18px; font-weight: 550; color: #333; margin-bottom: 10px; margin-left: 8%;">Search:</label>
        <input type="text" id="searchBox" name="search" placeholder="Enter username" style="border-radius: 7px; border: 1px solid #ccc; padding: 7px; font-size: 16px; width: 70%; margin-bottom: 10px; transition: all 0.3s ease;" value="<?php echo $searchQuery; ?>">
        <button type="submit" style="margin-top: 10px; border-radius: 5px; padding: 5px 34px; background-color: #007bff; color: white; font-size: 18px; border: none; cursor: pointer; transition: background-color 0.3s ease;">Search</button>
    </form>
</div>
<?php
if (isset($_SESSION['delete_msg'])) {
    echo "<div id='deleteAlert' class='alert alert-success' style='text-align: center; padding: 10px; width: 50%; left: 32%; margin-top: 53px;'>
            {$_SESSION['delete_msg']}
          </div>";
          unset($_SESSION['delete_msg']);

}
if (isset($_SESSION['edit_msg'])) {
    echo "<div id='editAlert' class='alert alert-success' style='text-align: center; padding: 10px; width: 50%; left: 32%; margin-top: 53px;'>
            {$_SESSION['edit_msg']}
          </div>";
          unset($_SESSION['edit_msg']);

}
if (isset($_SESSION['user_insert'])) {
    echo "<div id='userAlert' class='alert alert-success' style='text-align: center; padding: 10px; width: 50%; left: 32%; margin-top: 53px;'>
            {$_SESSION['user_insert']}
          </div>";
          unset($_SESSION['user_insert']);
}
?>
<script>
    window.onload = function() {
        var alertIds = ['deleteAlert', 'editAlert','userAlert'];
        alertIds.forEach(function(id) {
            var alertElement = document.getElementById(id);
            if (alertElement) {
                setTimeout(function() {
                    alertElement.style.display = 'none';
                }, 2000);
            }
        });
    };
</script>
<?php
$limit = 5;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;
$totalQuery = "SELECT COUNT(*) AS total FROM register WHERE FirstName LIKE '%$searchQuery%' OR LastName LIKE '%$searchQuery%'";
$totalResult = $conn->query($totalQuery);
$totalRow = $totalResult->fetch_assoc();
$totalRecords = $totalRow['total'];

$totalPages = ceil($totalRecords / $limit);

$sql = "SELECT * FROM register WHERE FirstName LIKE '%$searchQuery%' OR LastName LIKE '%$searchQuery%' ORDER BY id DESC LIMIT $start, $limit";
$result = $conn->query($sql);
?>




<div class="list" style="margin-bottom: 5px;">
<h5 style="margin-top: 5px; margin-left: 24%; font-weight: 400; margin-bottom: -25px; font-family: 'Segoe UI', Arial, sans-serif;">
    User list
</h5>
<a href="./add_user.php" class="btn btn-primary btn-sm" style=" margin-left: 92.5%;"><i class="fa-solid fa-user-plus"></i>Add user</a>
</div>
<table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white" style="width: 75%;  margin-left: 24%;">
    <thead>
        <tr>
            <th>ID</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            $i = $start + 1;
            while ($row = $result->fetch_assoc()) {
                $FirstName = $row['FirstName'];
                $LastName = $row['LastName'];
                $Email = $row['Email'];
                $status = $row['Enable'] == 1 ? "Enable" : "Disable";
        ?>
                <tr>
                    <td><?php echo  $i; ?></td>
                    <td><?php echo  $FirstName ?></td>
                    <td><?php echo  $LastName  ?></td>
                    <td><?php echo  $Email ?></td>
                    <td><?php echo  $status; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['Id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                    </td>

                    <td>
                        <a href="delete.php?id=<?php echo $row['Id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>

                </tr>
            <?php $i++;
            }
        } else { ?>
            <tr>
                <td colspan="7" style="text-align: center;">No Data Found.</td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</div>
<!-- Pagination -->
<div style="text-align: center;">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end" style="margin-right: 17px;">

            <li class="page-item <?php if ($page <= 1) echo 'disabled'; ?>" aria-label="First">
                <a class="page-link" href="?page=1">First</a>
            </li>

            <li class="page-item <?php if ($page <= 1) echo 'disabled'; ?>">
                <a class="page-link" href="?page=<?php echo $page - 1; ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php
            $range = 2;
            for ($i = max(1, $page - $range); $i <= min($page + $range, $totalPages); $i++): ?>
                <li class="page-item <?php if ($page == $i) echo 'active'; ?>">
                    <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                </li>
            <?php endfor; ?>


            <li class="page-item <?php if ($page >= $totalPages) echo 'disabled'; ?>">
                <a class="page-link" href="?page=<?php echo $page + 1; ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>

            <li class="page-item <?php if ($page >= $totalPages) echo 'disabled'; ?>">
                <a class="page-link" href="?page=<?php echo $totalPages; ?>">Last</a>
            </li>
        </ul>
    </nav>
</div>
</body>
<?php
$conn->close();
?>
