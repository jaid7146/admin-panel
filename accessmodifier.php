<?Php
class teacher{
    private function paper(){
        return "exam paper";
    }
    function exam(){
        if($this->paper()=="exam paper"){
            echo "print this paper";
        }else{
            echo "not print this a paper";
        }
    }
}
$t1= new teacher();
echo $t1->exam();
?>