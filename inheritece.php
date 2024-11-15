<?php

class user{
    function login($usertype){
        echo "$usertype  login";
}
}
class student extends user{
 function getname(){
    echo"jaid desai";
 }
}
class teacher extends user{
    function getage(){
        echo"19";
     }
}
$s1= new student();
$s1-> login("student");
echo "<BR><BR>";
$s1->getname(); 
echo "<BR><BR>";

$j2=new teacher();
$j2->login("teacher");
echo "<BR><BR>";
$j2->getage();

?>