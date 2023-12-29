<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- $_SERVER is vulnerable to cross-site scripting thus use a filter -->
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        username <br>
        <input type="text" name="username"> <br>
        <input type="submit">
    </form>
</body>
</html>


<?php
    // $_SERVER : Super Global Variable that contains headers, paths and script locations
    // The entries in this array are created by the web server
    // shows everything about the current web page enviornment
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "This is a post method <br>";
    }


    foreach($_SERVER as $key=>$value){
        echo "{$key} : {$value} <br>";
    }

?>
