<?php
setcookie("fruits","apple",time()+(86400));

if(isset($_COOKIE['apple'])){
echo "current cookies is ".$_COOKIE['colors'];
}else{
    echo "not set cookies";
}

print_r($_COOKIE);
?>