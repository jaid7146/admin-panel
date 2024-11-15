
<?PHP
//crate a array//
// $car= array("jaid","imran","yug","hasmi");
// var_dump($car);
// $car = [
//     "brand" => "forad",
//      "surname" =>"desai",
//      "name"=> "jaiddesai",
// ];

//assotive array
#$car= []; 
#$car['brand'] = "ford";
#$car['fname'] = "jaid";
#$car['lname'] = "desai";


//mix array//
// $jd = [];
// $jd[0] = "apple";
// $jd[1] = "pinepal";
// $jd["surname"] = "desai";




//Access Array Item//
// $user=array("jaid","desai","age","maruvada");
// echo $user[2];



//assotive array acces using a  array name//
// $user = ["brand" =>"volvo","model"=>2020,"manuferr"=>"india"];



//Excecute a Function Item//
// function myfunction() {
//     echo "my first function";
// }
// $myarr=array("jaid",12, myfunction);
// $myarr[] = "desai";
// $myarr[2]();

// function myFunction() {
//   echo "I come from a function!";
// }

// $myArr = array("Volvo" => "car", "number" => 15);
// //change array iteam//
// // $car=array("jaid","desai",19);
// // $car[0] = "imran";
// $myArr["volvo"] = "bike";


$cars = array("volvo","bmw","toyoto");
$cars[] = "farari";
unset($cars["0"]);

var_dump($cars); 
?> 
