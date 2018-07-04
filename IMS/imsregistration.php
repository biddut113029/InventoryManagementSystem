
<?php include 'ims_db_connect.php';?>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){


 $username=$_POST['username'];
 $contactno=$_POST['contactno'];
 $email =$_POST['email'];
 $password =$_POST['password'];
   mysqli_query($conn, "INSERT INTO usersims(username,contactno,email,password) VALUES ('$username','$contactno','$email','$password')");
   
}
?>