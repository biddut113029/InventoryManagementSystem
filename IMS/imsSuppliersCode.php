
<?php include 'ims_db_connect.php';?>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){


 $Action=$_POST['Action'];
 $id=$_POST['id'];
 $Name=$_POST['Name'];
 $ContactNo=$_POST['ContactNo'];
 $Address =$_POST['Address'];
 
//  $OpeningDue=13;
//  $TotalDue=11;

 $OpeningDue=number_format($_POST['OpeningDue'],2);
 $TotalDue=number_format($_POST['TotalDue'],2);
if($Action=="save")
    {
       mysqli_query($conn, "INSERT INTO suppliers (Name,ContactNo,Address,OpeningDue,TotalDue) VALUES ('$Name','$ContactNo','$Address', $OpeningDue,$TotalDue)");
       echo "Saved Successfully ";
    }
else if($Action=="update")
        {
        
                     $sql = "UPDATE suppliers SET Name='$Name',ContactNo='$ContactNo' ,Address='$Address',OpeningDue=$OpeningDue,TotalDue=$TotalDue WHERE id=".$id;
                
                if ($conn->query($sql) === TRUE) {
                    echo "Updated Successfully";
                 
                } else {
                    echo "Error updating record: " . $conn->error;
                }
                
                   
        
            
        }





}
?>