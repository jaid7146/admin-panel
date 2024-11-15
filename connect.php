<?php 
$host="localhost";
$username="root";
$password="";
$db_name="myapp";


$conn = new mysqli($host,$username,$password,$db_name);
if($conn->connect_error){
    die("some error".$conn->connect_error);
}
else {
    echo "";
}
?>