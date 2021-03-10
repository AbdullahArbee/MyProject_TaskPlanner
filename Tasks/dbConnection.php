<?php

$Server="localhost";
$Username="Arbee";
$Password="arbee123";
$Database = "Task";

// Create database  connection with correct username and password

$connect=new mysqli($Server,$Username,$Password,$Database);

//Check the connection is created properly or not 
if($connect->connect_error){
    echo "Connection error:" .$connect->connect_error;
}
   // echo "Connection has been created successfully";    

?>