<?Php
class compny{
 function getname(){
    echo "honda";
    return $this;
 }
 function getemply(){
    echo "5000 are avalibel";
    return $this;
 }
 function getoffice(){
    echo "total 50 office are here in sarkhej";
 }
 function getclose(){
    echo "total 10 office are close in all over country";
 }
}

$compnay= new compny();
$compnay->getname()->getemply()->getoffice()->getclose()
?>