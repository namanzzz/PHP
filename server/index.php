

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="
        <?php  
               // $_SERVER["PHP_SELF"];

                // in case the file name got changed, to avoid sending form data to a  non existing old file, use server super global variable


                // to avoid cross site scripting attacks
                htmlspecialchars($_SERVER["PHP_SELF"]);

        ?>
        
        " method="post">
            Username: <br>
            <input type="text" name="username">
            <input type="submit" value="login" name="submit">
        </form>
</body>
</html>






<?php
    // $_SERVER = Super Global Variable that contains headers, paths and script locations
    // entries in this associative array are created by the web browser
    // shows everything about the current web page enviornment

    // foreach($_SERVER as $key => $value){
    //     echo "$key = $value <br>";
    // }

    // echo $_SERVER["PHP_SELF"] . "<br>";
    // echo $_SERVER["REQUEST_METHOD"];
         
   if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "Hello post method <br>";
   }
?>
