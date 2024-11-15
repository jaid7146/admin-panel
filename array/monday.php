<form action="" method="post">
    <input type="date" name="text" id="text">
    <input type="submit" name="submit" id="submit">
</form> 
<?php 
if (isset($_POST['submit'])) {
    $text = $_POST['text'];
    }
    if($text=="monday"){
        echo "this is a monday";
    }elseif($text=="satuday"){
        echo "this is a satuday";
    }else{
        echo "unkhown day";
    }
    
?>