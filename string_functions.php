
<?php

  $username = "               Bro COde";
  echo $username . "<br>";

  $username = strtolower($username);
  $username = strtoupper($username);
  $username = trim($username);
  $username = str_pad($username, 20, "0");
  $username = strrev($username);
  
  // shuffle the strings
  $username = str_shuffle($username);
  $equals = strcmp($username, "Naman");
  echo $equals ."<br>";
  echo $username ."<br>";
  
  $phone = "934-361-7789";
 
  $phone = str_replace("-","/",$phone);
  echo $phone ."<br>";

  echo strlen($phone);



?>
