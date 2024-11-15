<?php
if(isset($_GET['user'])){
    class user{
       function getName($name){
            echo "user name  is $name";
        }
    }
  $user= new user();
  $user->getName($_GET['user']);
}
?>
<form action="" method="get">
<input type="text" placeholder="enter user name" name="user" >
<BR><BR>
<button type="submit">click me</button>
</form>