
<?php include 'ims_db_connect.php';?>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

 $id=$_POST['id'];
 $Status=$_POST['Status'];
 $Code=$_POST['Code'];
 $Name=$_POST['Name'];
 $PurRate =$_POST['PurRate'];
 $SalesRate =$_POST['SalesRate'];
 if( $Status=='save')
   mysqli_query($conn, "INSERT INTO products(Code,name) VALUES ('$Code','$Name')");
   else
     mysqli_query($conn, "update products set Code='$Code',name='$Name'where id='$id' ");
}
?>