<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="GET_POST_methods.php" method="post">
        <label>username:</label>
        <input type="text" name="username"> <br>
        <label>Password:</label>
        <input type="password" name="password"> <br>
        <input type="submit" value="log in">
    </form>

</body>

</html>



<?php

// $_GET and $_POST special variables used to 

// collect data from an HTML form

// data is sent to the file in the action attribute of <form> <form     action="some_file.php" method="get">

// 

echo "{$_POST["username"]} <br>";

echo "{$_POST["password"]} <br>";


// when using get method sensitive data such as password and username is added to the url(index.php?username=ddd&password=ssss) so we use post method to avoid this

// echo "{$_POST["username"]} <br>";

// echo "{$_POST["password"]} <br>";





// $_GET = Data is appended to the url, NOT SECURE, char limit, bookmark possible with values, get requests can be cached, better for a searh page

// $_POST = Data is packaged inside the body of the HTTP, more secure, No data limit, can not bookmark, requests are not cached, better for submitting credentials

?>
