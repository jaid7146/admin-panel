<?php
class Solution {

/**
 * 
 */
function addBinary($a, $b) {
    $i= strlen($a)-1;
    $j= strlen($b)-1;
    $result="";
    $carry=0;
    while($i>=0||$j>=0||$carry) {
        $sum = $carry;
        if($i>0){
     $sum +=$a[$i--];

        }
        if($j>0){
        $sum +=$b[$j--];
        }
        $carry = $sum >=2 ? 1:0;
        $result = ($sum%2).$result;
    }
    return $result;
}
}
?>