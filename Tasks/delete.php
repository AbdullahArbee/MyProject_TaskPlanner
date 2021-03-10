<?php 
include ("dbConnection.php");

$id = $_GET['id'];    // we get the id however we pass the 'id=' in parameter so it knows what to pic up by

//var_dump($id);

// we using $connect from the DbConnection Variable and putting that in $Result which is using that to 
//connect and make a query as well as store the query
$Result = $connect->query("Delete from tasks where id = $id");

$connect->close();

header("Location: index.php", true, 301);
// exit;