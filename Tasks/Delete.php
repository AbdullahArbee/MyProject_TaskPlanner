<?php 
include ("DbConnection.php");

$id = $_GET['id'];    // we get the id however we pass the 'id=' in parameter so it knows what to pic up by

//var_dump($id);

// we using $connect from the DbConnection Variable and putting that in $Result which is using that to 
//connect and make a query as well as store the query
$Result = $connect->query("Delete from tasks where id = $id");

//if the result that comes in is greater than 0 means something came else
if ($Result->num_rows > 0) {

    //the results of the query is being fectched by the function and put into records and then we echo that out
    while ($records=$Result->fetch_assoc()) {

        echo"<a href=Delete.php?id=$records[id]>
        <br/>TaskName: " . $records["Name"]. 
        "<br/>TaskDetails: ". $records["Details"].
        "<br/>
        <br/></a>
        ";
        
    }

}
else {
    echo'Its been deleted';
    echo'<a href=index.php><h1>Return Home</h1></a>';
}

$conn->close();


// header("Location: http://Tasks.local/index.php", true, 301);
// exit;