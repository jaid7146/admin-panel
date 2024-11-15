
<form action="" method="post">
<input type="number" id="number" name="number" required>
<input type="submit" name="submit" id="submit">
</form>
<?php 
if(isset($_POST['submit'])){
    $number=$_POST['number'];
    
switch($number) {
    case($number > 500 ):
        echo "<H2>invalid score</h2>";
        break;
    case ($number >= 50):
    echo "<H2>pass out! your rank is.  $number </h2>";
    break;
case ($number < 50):
echo "<H2>you are a fail mark is $number </h2>";
break;
default;
echo "invalid input";
}
}

?>