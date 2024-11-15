<?Php
class constratiordemo{
 public $name;
function __construct($name){
$this->name=$name;
}
function displayname(){
    echo $this->name;
}
}
$cd = new constratiordemo("yug joshi");
$cd->displayname();

?>