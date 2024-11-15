<?php
 if(isset($_POST['name'])){
     echo "user name is ". $_POST['name'];
     echo "<BR>";
     echo "user email is". $_POST['email'];
     echo "<BR>";
     echo "user password is". $_POST['password'];
     echo "<BR>";
    echo "user skils is ".implode(",",$_POST['skilss']);
      echo "<BR>";
      echo "user gender is". $_POST['gender'];
      echo "<BR>";
      echo "user city is". $_POST['city'];
            echo "<BR>";
      echo "user bio is". $_POST['bio'];
 }
?>

