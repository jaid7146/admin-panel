<form action="" method="post">
    <input type="text" name="user" placeholder="enter user name"/>
    <BR>
    <BR>
    <button name="button" value="set">
        set cookies
    </button>
    <BR>
    <BR>
    <button name="button" value="display">display cookies</button>
    <BR>
    <BR>
    <button name="button" value="delete">delete cookies</button>
</form>
<?php 
if(isset($_POST['button'])){
    if($_POST['button']=="set"){
        $val=$_POST['user'];
        setcookie("user",$val);
        echo "cookies is set";
    }
 if($_POST['button']=='display')
 {
    if(isset($_COOKIE['user'])){
        echo $_COOKIE['user'];
    }
 }
}
?>