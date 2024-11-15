<form method="POST">
    <input type="text" placeholder="Enter name" name="name">
    <BR><BR>
    <input type="text" placeholder="Enter depertment" name="depertment">
    <BR><BR>
    <input type="text" placeholder="Enter salary" name="salary">
    <BR><BR> 
    <input type="text" placeholder="Joing dates" name="date">
    <BR><BR>
    <button>Submit</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=== "post") {
    $name =$_POST['name'];
    $depertment= $_POST['depertment'];
    $salary= $_POST['salary'];
    $date= $_POST['date'];

include("./connect.php");
$stmt=$conn->prepare("INSERT INTO  person(name,depertment,salary,date) VALUES (?,?,?,?)");


$stmt->bind_param("ssis",$name,$depertment,$salary,$date);

if($student->execute()) {
    echo "data inserted successfully";
}else {
    echo "data not inserted";
}
$student->close();
$conn->close();
}
