<?php
class countrysale{
    static public $totalsales=1000;
    function gettotalsale(){
        echo static::$totalsales;
    }
}


class citysale  extends countrysale{
    static public $totalsales=50;
}

$city = new citysale();
$city->gettotalsale();



?>