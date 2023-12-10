
<?php

   // Associative arrays = 
   // An array made of key value pairs

   $capitals = array("Russia"=>"Moscow", "India"=>"New Delhi", "Japan"=>"Tokyo", "North Korea"=>"Pyongyang", "Iran"=>"Tehran");

    // echo $capitals["Russia"]. "<br>";

    $capitals["India"] = "Delhi";
    $capitals["China"] = "Beijing";

    array_pop($capitals);
    // array_shift($capitals);
    $keys = array_keys($capitals);
    $values = array_values($capitals);


    // foreach($keys as $key){
    //     echo $key . "<br>";
    // }
    
    foreach($values as $value){
        echo "$value <br>";
    }
    // we can flip the key and value pairs using array_flip()

    $capitals = array_flip($capitals);
    // next is count function 

    echo count($capitals) . "<br>";

    foreach($capitals as $key=>$value){
        
        // echo $key ."<br>" . $value. "<br>";
        echo "{$key}, {$value} <br>";
    }

    
?>


