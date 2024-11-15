
<form action="" method="post">
    <input type="text" placeholder="enter file name" name="filename"/>
    <BR>
    <BR>
<textarea name="content">
</textarea>
<Br>
<BR>
<button>create file</button>
</form>
<?php
if(isset($_POST['filename'])){
$fileName= "filess/".$_POST['filename'];
$content=$_POST['content'];
$file= fopen($fileName,"w")or die("unable to create file");
fwrite($file,$content);
Fclose($file);
echo "create a file";
}
?>  