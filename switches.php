<?php

// swiches

// switch is a replacement to using many else if statements
// less code and more efficient

$grade = "A";

switch ($grade) {
    case 'A':
        # code...
        echo "Well done you got A";
        break;
    case 'B':
        echo"You did good";
        break;

    case 'C':
        echo"You did okay";
        break;

    case 'D':
        echo"You did bad";
        break;
    case 'E':
        echo "You have failed the test";
        break;
    default:
        echo"{$grade} is not a valid grade please check it once again :)";
        
}


?>


