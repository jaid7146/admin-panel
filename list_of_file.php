<?Php 
$path="filess";
$items=scandir($path);
$items= array_diff($items,array(".",".."));
foreach($items as $item){
    echo "<a href=./filess/$item>$item</a>";
    echo "<BR/>";
}
?>