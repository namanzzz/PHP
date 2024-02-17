<?php
    include("database.php");
// inserting data in mysql table using php

// some sql query
    $password = "naman123";
    $username = "Naman";
    $password = password_hash($password, 
    PASSWORD_DEFAULT
);

    $sql = "INSERT INTO users (user, password) VALUES ('$username', '$password')";
    
    try{
        mysqli_query($conn, $sql);
        echo "user is registered <br>";
    }catch(mysqli_sql_exception){
        echo "Could not register user <br>";
    }
    mysqli_close($conn);

?>

