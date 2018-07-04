
<?php
$servername = "66.199.232.226";
$username = "biddutxy_biddut";
$password = "biddut.hossain3029";
$dbname = "biddutxy_first_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$sql_details = array(
    'user' =>$username,
    'pass' => $password,
    'db'   => $dbname,
    'host' => $servername
);



?>