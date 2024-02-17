<?php
include("database.php");
$sql = "SELECT * FROM users WHERE user = 'Namn' ";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result); // associative array
    echo $row["id"] . "<br>";
    echo $row["user"] . "<br>";
    echo $row["reg_date"];   
}
else{
    echo "No results found matching the query";
}

mysqli_close($conn);
