<?php
include("./connect.php");
$student= $conn->prepare("delete from clg where city ='Ea ut anim non eiusm'");
echo $student->execute();





?>