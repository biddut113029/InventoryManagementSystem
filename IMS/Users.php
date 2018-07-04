





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




$sql = "SELECT id,username FROM tblUsers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {


	  echo "<table  border='1'>";
            echo "<tr>";
                echo "<th>id</th>";
            
                echo "<th>usernameFSF</th>";
            
            echo "</tr>";

    // output data of each row
    while($row = $result->fetch_assoc()) {

                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
               
            echo "</tr>";

    }
     echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>