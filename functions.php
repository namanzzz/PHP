
<?php

  function happy_birthday($name){
    echo "Happy birthday to you <br>";
    echo "Happy birthday to you <br>";
    echo "Happy birthday to you, Dear {$name}... <br>";
    echo "Happy birthday to yuuu {$name} <br> <br>";
    
}

function is_even($number){
    return $number%2==0;
}

if(is_even(47)){
    echo "46 is even man <br>";
}
else echo "47 is odd man<br>";



happy_birthday("Naman");

happy_birthday("she");

happy_birthday("He");



?>
