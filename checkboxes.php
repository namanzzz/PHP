<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">
        Pizza <br>
        <input type="checkbox" name="hamburger" value="Hamburger">
        Hamburger <br>
        <input type="checkbox" name="taco" value="Taco">
        Taco <br>
        <input type="checkbox" name="burger" value="Burger">
        Burger <br>
        <input type="submit" name="submit">

    </form>



</body>

</html>


<?php
// checkboxes

if(isset($_POST["submit"])){

    if(isset($_POST["pizza"]) && isset($_POST["hamburger"]) && isset($_POST["burger"]) && $_POST["taco"]){
            echo "Oh Great You like all of them!!";
            exit;
    }
    
    
    if(isset($_POST["pizza"])){
        echo "You selected pizza <br>";
    }

    if(isset($_POST["hamburger"])){
        echo "You selected hamburger <br>";
    }
    if (isset($_POST["burger"])) {
        echo "You selected burger <br>";
    }
    if (isset($_POST["taco"])) {
        echo "You selected taco <br>";
    }


    


}




?>
