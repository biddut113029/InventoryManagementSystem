
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "first_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$columns = array( 
// datatable column index  => database column name
    0 => 'Name',
    1 => 'Type',
    2 => 'Plays',
);



$sql = "SELECT  Name,Type,Plays  FROM persons";

$res = mysqli_query($conn, $sql);
//$employees = array();
//while($r = mysqli_fetch_assoc($res)) {
//     $employees[] = $r;
//}
 //  $dataArray = array();

 $dataArray  = Array(); 

 $i = 0;
while( $row = mysqli_fetch_array($res) ) {
 

    $dataArray[$i]['Name'] = $row["Name"];
    $dataArray[$i]['Type'] = $row["Type"];
    $dataArray[$i]['Plays'] = $row["Plays"];
$i++;
}



//echo json_encode($books);




// header("Content-type: application/json");
    echo json_encode( $dataArray);

?>