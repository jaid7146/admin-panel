<?php 
$host="localhost";
$username="root";
$passworld="Jaid@321";
$db_name="college";



$conn =  new mysqli($host,$username,$passworld,$db_name);
if($conn->connect_error) {
die("some error".$conn->connect_error);

}else{
      echo"";
}

?>