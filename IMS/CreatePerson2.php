<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>

<h3>Using CSS to style an HTML Form</h3>

<div>
 <form action="CreatePerson.php" method="post">
    <label for="fname"> Name</label>

<input type="text" id="Name"  name="Name" placeholder="name.." required="required"/> <br/>



    <label for="lname">Type</label>
 <input type="text" id="Type"  name="Type" placeholder="Type.."  required="required"/> <br/>


	  <label for="Plays">Plays</label>
 <input type="text" id="Plays"  name="Plays" placeholder="Plays.."  required="required"/> <br/>


  <label for="Nobels">Nobels</label>
 <input type="text" id="Nobels"  name="Nobels" placeholder="Nobels.."  required="required"/> <br/>



   <label for="Poems">Poems</label>
 <input type="text" id="Poems"  name="Poems" placeholder="Poems.."  required="required"/> <br/>


   <label for="Essays">Type</label>
 <input type="text" id="Essays"  name="Essays" placeholder="Essays.."  required="required"/> <br/>

   <label for="Address">Type</label>
 <input type="text" id="Address"  name="Address" placeholder="Address.."  required="required"/> <br/>



    <label for="Country">Country</label>
    <select id="Country" name="Country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "first_db";
$conn = new mysqli($servername, $username, $password, $dbname);

$Name = mysqli_real_escape_string($conn ,$_POST['Name']);
$Type = mysqli_real_escape_string($conn ,$_POST['Type']);
$Plays = mysqli_real_escape_string($conn ,$_POST['Plays']);
$Nobels = mysqli_real_escape_string($conn ,$_POST['Nobels']);
$Poems = mysqli_real_escape_string($conn ,$_POST['Poems']);
$Essays = mysqli_real_escape_string($conn ,$_POST['Essays']);
$Address = mysqli_real_escape_string($conn ,$_POST['Address']);
$Country = mysqli_real_escape_string($conn ,$_POST['Country']);

echo $Name;


   mysqli_query($conn, "INSERT INTO persons(Name,Type,Plays,Nobels,Poems,Essays,Address,Country) VALUES ('$Name','$Type','$Plays','$Nobels','$Poems','$Essays','$Address','$Country')");

echo $Name;
   
		Print '<script>alert(" entering insert!");</script>';
		
		 //Inserts the value to table users
		Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
		Print '<script>window.location.assign("Persons.php");</script>'; // redirects to register.php
		
}
?>