
<form method="post">
    <input type="file" name="file" enctype="multipart/form-data">
    <BR>
    <BR>
    <button>submit</button>
</form>
<?php 
if(isset($_FILES['file']))
$file=$_FILES['file']['tmp_name'];
$myfile=fopen($filess,"r")or die("unble to create file");
echo fread($myfile,filesize($file));
fclose($myfile);    
?>
