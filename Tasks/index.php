<?php echo 'Hello World';

include ("dbConnection.php");

// we using $connect from the DbConnection Variable and putting that in $Result which is using that to 
//connect and make a query as well as store the query
$Result = $connect->query("select * from tasks");

//if the result that comes in is greater than 0 means something came else
if ($Result->num_rows > 0) {

    //the results of the query is being fectched by the function and put into records and then we echo that out
    while ($records=$Result->fetch_assoc()) {

        echo "<a href= details.php?id=$records[id]>
        <br/>TaskName: " . $records["Name"]. 
        "<br/>TaskDetails: ". $records["Details"].
        "<br/>
        <br/></a>
        ";
        
    }

}
else {
    echo'No Records found';
}

$connect->close();




echo"<form action='create.php' method='POST'>

    <label for='Name'>Name:</label>
    <input type='text' id='Name' name='Name'>

    <label for='Details'>Details:</label>
    <input type='text' id='Details' name='Details'>

    <button type='submit'>Add</button>

</form>
";









// /* Change database details according to your database */
// $dbConnection = mysqli_connect('localhost', 'Arbee', 'arbee123', 'Task');
// $firstName  = "Robin";
// $lastName   = "Jackman";

// $query = "INSERT INTO tasks (Name, Details,IsComplete) VALUES ('$firstName', '$lastName',0)";
// if (mysqli_query($dbConnection, $query)) {
// echo "Successfully inserted " . mysqli_affected_rows($dbConnection) . " row";
// } else {
// echo "Error occurred: " . mysqli_error($dbConnection);
// }

//Another working solution

// echo"<form action='$_SERVER[PHP_SELF]' method='POST'>

//     <label for='Name'>Name:</label>
//     <input type='text' id='Name' name='Name'>

//     <label for='Details'>Details:</label>
//     <input type='text' id='Details' name='Details'>

//     <button type='submit'>Add</button>

// </form>
// ";

// echo"$_POST[Name]";

// $Name = $_POST["Name"];
// $Details = $_POST["Details"];

// $connect->query("INSERT INTO tasks (Name, Details,IsComplete ) values ('$Name', '$Details',0)");   // our connect variable from dbconnection

// $conn->close();





//Another just incase
// while ($records=$Result->fetch_assoc()) {

//     echo "<a href= $_SERVER[PHP_SELF]?id=$records[id]>  if we dont have id= then when we $_get we wont get anything 
//     <br/>TaskName: " . $records["Name"]. 
//     "<br/>TaskDetails: ". $records["Details"].
//     "<br/>
//     <br/></a>
//     ";
    
// }