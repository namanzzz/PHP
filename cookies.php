<?php
   // COOKIES
   // Information about a user stored in webbrowser,
   // ex youtube advertisements etc, browsing preferences


   // stored as associative arrays
    setcookie("fav_food", "pizza", time() + (86400), "/");
    // key,value, 86400 seconds cookie expiry time 

    setcookie("fav_drink", "vodka", time() + (86400*2) , "/");

    foreach($_COOKIE as $key=>$value){
        echo"$key = $value" . "<br>";
    }

// deleting cookies
// setcookie("fav_food", "pizza", time() - 0, "/");
// // key,value, 86400 seconds cookie expiry time 

// setcookie("fav_drink", "vodka", time() - 0, "/");
 

if(isset($_COOKIE["fav_drink"])){
    echo"Fav drink of russians is {$_COOKIE["fav_drink"]} <br>";
}

?>
