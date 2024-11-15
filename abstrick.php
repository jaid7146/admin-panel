<?php 
abstract class productfeatucer{
    abstract function productdetails();
    abstract function productprice();
}

class Uploadproduct extends productfeatucer{
    function productdetails()
    {
        echo "product data are avavlibe";
    }
}
$upload = new Uploadproduct();
$upload->productdetails();
?>