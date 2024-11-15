<?php  

for($i=0;$i<=10;$i++){
    echo $i;
    echo "<BR>";
    if($i==8){
        goto outsideloop;
    }
}

outsideloop:
echo "break this loop";















?>