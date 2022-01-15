<?php
  if($_SERVER["HTTP_HOST"]=='localhost'){
    //servername of production:
    $host = "";
  }else{
    $host = "";
  } 
    $dbname = "";
    $username = "";
    $password = "";
 
try {
    $connpdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);        
} catch (PDOException $pe) {
    die("Connection failed: $dbname :" . $pe->getMessage());
}
