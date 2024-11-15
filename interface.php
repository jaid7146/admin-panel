<?php 
interface ProductFeature{
    function image();
    function owenerdetails();
}

class product implements ProductFeature {

    function image()
    {
        echo "this is a image";
    }

    function owenerdetails()
    {
        echo "this is a owerdetalis";
    }
}

$product = new product();
$product->owenerdetails();
echo "<BR><BR>";
$product->image();
?>
