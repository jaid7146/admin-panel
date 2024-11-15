<?php
trait parentcompny1{
    function gettotalemp(){
        echo 50;
    }
}
trait parentcompny2{
    function gettotaloff(){
        echo 10;
    }
}

class compny {
    use parentcompny1;
    use parentcompny2;
}

$product = new compny;
$product->gettotalemp();
echo "<BR><BR>";
$product->gettotaloff();

?>