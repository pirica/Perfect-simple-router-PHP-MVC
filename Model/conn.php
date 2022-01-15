<?php
  if($_SERVER["HTTP_HOST"]=='localhost'){
    //servername of production:
    $servername = "";
  }else{
    $servername = "";
  }
  
  $database = "";
  $username = "";
  $password = "";  

  $conn = mysqli_connect($servername, $username, $password, $database);  
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }  
