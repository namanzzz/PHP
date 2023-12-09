<?php
// executed from top to bottom 

$age = 22;
if ($age >= 18 && $age!=22) {
    echo "You can enter the bar";
}
else if($age==22){
    echo "please bro dont spoil your life :)";
} 

else {
    echo "please play with your toys";
}


echo "<br>";
// ex 2

$hours = 50;
$rate = 15;
$weekly_pay = null;


if($hours <= 0){
    $weekly_pay = 0;
}
else if($hours  <= 40){
    $weekly_pay = $hours * $rate;
}
else{
    //overtime pay
    $weekly_pay = ($rate*40) + ($hours - 40)*($rate*1.5);  

}

echo "You made \${$weekly_pay} this week";



?>



