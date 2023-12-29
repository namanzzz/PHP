

<?php
   // password hashing

   $password = "hotdog123";
   $hash = password_hash($password, PASSWORD_BCRYPT);
   echo "$hash <br>";

   if(password_verify("hotdog123", $hash)){
    echo "The passwords match <br>";
   }
   else{
    echo "wrong password <br>";
   }
?>
