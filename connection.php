<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db     = "hosannapraise";

$conn = new mysqli ($dbhost,$dbuser,$dbpass,$db);

// Check connection

     if($conn->connect_error){
         echo "connection was failed";
     }
     else{
         echo "connection was succesful";
     }
?>
