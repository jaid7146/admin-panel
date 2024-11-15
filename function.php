<?php
class myname{
    function sum($a,$b){
       echo $a+$b;
    }
    function multi($a,$b){
        echo $a*$b;
     }
     function divison($a,$b){
        echo $a/$b;
     }
}
$jd = new myname();
echo "this is a multi";
echo "<BR>";
 $jd->sum(50,50);
echo "<BR>";
echo "<BR>";
 $jd = new myname();
 echo "this is a multi";
 echo "<BR>";
 $jd->multi(50,50);
 echo "<BR>";
 echo "<BR>";
 echo "this is a divison";
 echo "<BR>";
 $jd = new myname();
 $jd->divison(50,50);
?>