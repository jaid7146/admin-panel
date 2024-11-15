<?php 
trait parent1{
    function getoffer(){
        echo 500;
    }
}

trait parent2{
    function getoffer(){
        echo 1000;
    }
}

class compnay {
    use parent1;
    use parent2{
        parent1::getoffer insteadOf parent2;
        parent2::getoffer as getdiscount;
    }
}

$s1= new compnay();
$s1->getoffer();
echo "<BR><BR>";
$s1->getdiscount();
?>