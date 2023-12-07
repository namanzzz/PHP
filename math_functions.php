<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>
            x:
        </label>
        <input type="text" name="x">
        <label> y: </label>
        <input type="text" name="y">

        <label> z: </label>
        <input type="text" name="z">
        <input type="submit" value="total">
    </form>

</body>

</html>



<?php
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
// echo "{$x} <br>";
$total = abs($x);
$total = round($x);
$total = floor($x); // round down
$total = ceil($x);
$total = pow($x, $y);
$total = sqrt($y);
$total = pi(); // value of pi

$total = rand(); // throws a random number
$total = rand(1,6); // for dice

$maximum = max($x, $y, $z); 
$minimum = min($x, $y, $z);
echo "{$total} <br>";
echo $minimum;
?>
