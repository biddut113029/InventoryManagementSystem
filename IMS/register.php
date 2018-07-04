<html>
	<head>
		<title>My first PHP website</title>
	</head>
	<body>
		<h2>Registration Page</h2>
		<a href="index.php">Click here to go back</a><br/><br/>
		<form action="register.php" method="post">
			Enter Username: <input type="text" name="username" required="required"/> <br/>
			Enter Password: <input type="password" name="password" required="required" /> <br/>
			<input type="submit" value="Register"/>
		</form>
	</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "first_db";
$conn = new mysqli($servername, $username, $password, $dbname);
$username = mysqli_real_escape_string($conn ,$_POST['username']);
$password = mysqli_real_escape_string($conn ,$_POST['password']);
     $bool = true;
     echo $username;
     echo $password ;
   
	if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
    } 


		$sql = "SELECT username FROM tblUsers";
		$result = $conn->query($sql);
		if ($result->num_rows > 0)
		 {

		 	
		// output data of each row
		while($row = $result->fetch_assoc()) 
			{
					if($username==$row["username"])
					{
					echo "EXISTS" . $row["username"]. "<br>";
					$bool=false;

					}      
			}
		} 
		else
		 {
		echo "0 results";
		}
		if($bool) // checks if bool is true
		{
		Print '<script>alert(" entering insert!");</script>';
		mysqli_query($conn, "INSERT INTO tblusers (username, password) VALUES ('$username','$password')"); //Inserts the value to table users
		Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
		Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
		}
}
?>