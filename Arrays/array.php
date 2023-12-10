
<?php

    // array = "variable" which can hold more than one value at a time


    
    $foods = array("apple", "orange", "banana", "coconut");

    $foods[0] = "Pineapple";

    // echo $foods[1] . "<br>";
    // echo $foods[3]."<br>";

    array_push($foods, "mango", "kiwi");
    // array_pop($foods); 

    array_shift($foods); //remove first element and shift the array

 
    $foods = array_reverse($foods); //this function returns a new array

    //count the no of array elements
    echo count($foods)."<br>";

    // use for each loop to traverse array
    foreach($foods as $food){
        echo $food."<br>";
    }
?>



