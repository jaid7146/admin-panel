<script>
    function showAlert(message) {
        alert(message);
    }
</script>
<form method="post" action="">
    <label>enter the number(1 to 100)</label>
    <input type="text" id="number" name="number" required>
    <BR><BR>
    <input type="submit" id="submit" name="submit">
</form>


<?php
if (isset($_POST['submit'])) {
    $number = $_POST['number'];


    if (!is_numeric($number)) {
        echo "<script>showAlert('Invalid input. Please enter a numeric value.');</script>";
    } else {
        $number = (int)$number;
    }
    if ($number > 100 || $number < 1) {
        echo "<script>showAlert('Invalid input. Please enter a numeric value.');</script>";
    } else {
        echo "your enter this number:$number";
    }
}
