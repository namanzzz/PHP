<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="post">
        username: <br>
        <input type="text" name="username"> <br>
        
        age: <br>
        <input type="text" name="age"> <br>

        Email <br>
        <input type="text" name="email"> <br><br>
        <input type="submit" name="login" value="login">

    </form>

</body>

</html>


<?php
// for preventing malicious code from running
// for example <script> alert('You have a virus!!') </script>
// filter_input function with 3 parameters

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $username = filter_input(INPUT_POST, "username", 
    FILTER_SANITIZE_SPECIAL_CHARS);
 
    $age = filter_input(
        INPUT_POST,
        "age",
        FILTER_VALIDATE_INT
    );
    $success = true;
    $email = filter_input(INPUT_POST,
"email", FILTER_VALIDATE_EMAIL);

    if(empty($email)){
        echo "This is wrong email format" . "<br";
        $success = false;
    }

    if (empty($age)) {
        echo "Age is not valid <br>";
        $success = false;
    }
    

    echo"<br>";
    if($success) echo "Hello {$username} Your Info has been successfully submitted";
}


?>
