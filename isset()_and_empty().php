
<?php

   $username = false;
   // echo isset($username); //if a variable is declared and not null
   if(isset($username)){
        echo "This is set variable";
   }
   else{
    echo "This variable not set";
   }
   echo "<br>";

   // empty() function returns true if a variable is not declared, false, null or "";

    if(empty($username)){
        echo "This variable is empty";
    }
    else echo"This variable is not empty";



?>


