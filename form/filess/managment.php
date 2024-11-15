<?php
include("./teacher_namespace.php");
include("./student.php");


$teacher = new teacher_namespace\join();
$teacher->teacherdate();
echo "<BR><BR>";
$student = new student\join();
$student->studetndate();
?>