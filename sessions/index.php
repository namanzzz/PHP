<?php
session_start();
// session is a super global variable
// session - Store information about a user that can be used across multiple pages
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        username <br>
        <input type="text" name="username"> <br>
        password <br>
        <input type="password" name="password"> <br>
        <input type="submit" name="login" value="login">
    </form>
</body>

</html>


<?php
    
    if(isset($_POST["login"])){
        
        if(!empty($_POST["username"]) && !empty($_POST["password"])){

            $_SESSION["username"] = $_POST["username"]; 
            $_SESSION["password"] = $_POST["password"];

            // echo $_SESSION["username"] . "<br>";
            // echo $_SESSION["password"] . "<br>";

            // after hitting login we will redirect to the home page
            header("Location:home.php");
        }
        else{
            echo "Missing username or password <br>";
        }
        
    }

?>
