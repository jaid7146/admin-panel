<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>call back function</title>
</head>
<body>
    <form method="get">
        <button name="btn" value="btn2">
            call back function
        </button>
    </form>
</body>
</html>
<?php
if(isset($_GET['btn'])){
callback();
}
function callback(){
  echo "hello jaid desai";
}
?>