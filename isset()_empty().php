<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>username</label>
        <input type="text" name="username"><br>
        <label>password</label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log In">
    </form>

</body>

</html>



<?php
    // $_POST is nothing but a associative array
    
    foreach($_POST as $key => $value){
        echo "{$key} = {$value} <br>";
    }
    

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $pwd = $_POST["password"];
        if(empty($username) || empty($pwd)){
            echo "one or more fields are missing <br>";
        }
        else{
            echo "Hello {$username}, {$pwd} is your password";
        }
    }


    



?>
