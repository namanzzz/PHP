<?php
// Logical operators


$male= true;
if(!$male){
    echo "You are a rich girl, life easy for you :)";
}
else{
    echo "Man, us bro us";
}
echo "<br>";


// && and || logical operators

$name = "Naman Matoliya";
if($male && $name=="Naman Matoliya"){
    echo "Ofcourse I know him, thats me <br>";
}
else{
    echo "You will survive :)";
}

echo "<br>";

$age = 22;
if($age >= 20 && $age<=25){
    echo "Hey {$name} this is your time to shine <br>";
}


?>


