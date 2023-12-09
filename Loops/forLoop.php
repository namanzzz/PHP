<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter a number to count to</label>
        <input type="text" name="counter">
        <input type="submit" value="Click here">

    </form>    

</body>
</html>




<?php

// for loops: to repeat some code a certain amount of times

// for($i=3000;$i>=20;$i-=1000){
//     echo "Naman dominates <br>";
//     echo "$i <br>";
// }

$counter = $_POST["counter"];
for($i=1;$i<=$counter;$i++){
    echo"$i <br>"; 
}

?>



