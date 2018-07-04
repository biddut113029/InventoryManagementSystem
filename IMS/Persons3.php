

<!DOCTYPE html>
<html>
<head>



<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">



<script>

$(document).ready(function() {
    $('#Persons').DataTable( {
          "scrollY": 200,
         "scrollX": true
    } );
} );
</script>





<style>

div.dataTables_wrapper {
        width: 500px;
        margin: 0 auto;

    }


#Persons {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 600px;
   margin-left:0px;
}

#Persons td, #Persons th {
    border: 1px solid #ddd;
    padding: 8px;
     background-color:   #9fdfbf;
}

#Persons tr:nth-child(even){background-color: #f2f2f2;}

#Persons tr:hover {background-color: #ddd;}

#Persons th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color:  #884dff;
    color: white;

}
</style>



</head>
<body>



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



$sql = "SELECT id,Name,Type,Plays,Poems,Essays,Address,Country  FROM persons";
$result = $conn->query($sql);

if ($result->num_rows > 0) {



	  echo "<table  id='Persons' class='display' style='width:100%''  border='1'         >";
              echo "<thead>"  ;   
            echo "<tr>";
            echo "<th>id</th>";
            echo "<th>Name </th>";
            echo "<th>Type </th>";
            echo "<th>Plays </th>";
            echo "<th>Poems </th>";
            echo "<th>Essays </th>";
            echo "<th>Address </th>";
            echo "<th>Country </th>";
   
                
            
            echo "</tr>";
            echo "</thead>";
             echo "<tbody>";
            

    // output data of each row
    while($row = $result->fetch_assoc()) {

                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" . $row['Type'] . "</td>";
                    echo "<td>" . $row['Poems'] . "</td>";
                    echo "<td>" . $row['Poems'] . "</td>";
                    echo "<td>" . $row['Essays'] . "</td>";
                    echo "<td>" . $row['Address'] . "</td>";
                    echo "<td>" . $row['Country'] . "</td>";


           
               
            echo "</tr>";

    }
    echo "</tbody>";
     echo "<tfoot>";
 
             echo "<th>id</th>";
            echo "<th>Name </th>";
            echo "<th>Type </th>";
            echo "<th>Plays </th>";
            echo "<th>Poems </th>";
            echo "<th>Essays </th>";
            echo "<th>Address </th>";
            echo "<th>Country </th>";
   

     echo "</tfoot>";

     echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>