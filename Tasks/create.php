<?php 

include("dbConnection.php");

$Name = $_POST["Name"];
$Details = $_POST["Details"];

$connect->query("INSERT INTO tasks (Name, Details,IsComplete ) values ('$Name', '$Details',0)");   // our connect variable from dbconnection

$connect->close();

header("Location: index.php");
