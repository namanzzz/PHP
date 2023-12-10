
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter the country to know capital</label>
        <input type="text" name="country">
        <input type="submit" value="submit">
    </form>
</body>
</html>



<?php


   $capitals = array("Russia"=>"Moscow", "India"=>"New Delhi", "Japan"=>"Tokyo", "North Korea"=>"Pyongyang", "Iran"=>"Tehran");
 
   $country = $_POST["country"];
   echo "The capital for $country is $capitals[$country]";
    

    
?>


