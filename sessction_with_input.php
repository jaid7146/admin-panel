<form action="" method="post">
    <input type="text" name="user" placeholder="enter your name"/>
    <BR>
    <BR>
    <button name="button" value="set">set session</button>
    <BR>
    <Br>
    <button name="button" value="get">get session</button>
<BR>
<BR>
    <button name="button" value="delete">delete session</button>
</form>
<?Php
session_start();
if(isset($_POST['button'])){
    if($_POST['button']=="set"){
        $val=$_POST['user'];
        $_SESSION['user']==$val;
    }
 if($_POST['button']== "get"){

   echo $_SESSION['user'];
 }
}
?>