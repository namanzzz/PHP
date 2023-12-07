<?php 

    // arithmetic operators
    // + - * / ** %
    $x = 10;
    $y = 20;
    $res = null;

    $res = $x + $y;
    $res = $x - $y;
    $res = $x*$y;
    $res = $x/$y;
    $res = $x**$y;
    $res = $x % $y;
    echo "$res <br>"; // or echo $res



    // Increments or Decrements operators
    $counter = 0;
    $counter++;
    $counter--;

    $counter+=2;
    echo ++$counter;
    echo "<br>";

    // operator precedence
    // in order
    // ()
    // **
    // * / %
    // + -
    $total = 1+2+3-4*1 / 4;
    echo $total


?>
