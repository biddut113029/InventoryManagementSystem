
<?php include 'ims_db_connect.php';?>

<?php
if($_SERVER["REQUEST_METHOD"] == "get"){


 $_GET['ajaxid'] ;
 $_GET['UserID'];
 echo  $_GET['ajaxid'];

// $Action=$_POST['Action'];
// $id=$_POST['id'];
// $Name=$_POST['Name'];
//  $ContactNo=$_POST['ContactNo'];
//  $Address =$_POST['Address'];
// //  $OpeningDue=13;
// //  $TotalDue=11;

//  $OpeningDue=number_format($_POST['OpeningDue'],2);
//  $TotalDue=number_format($_POST['TotalDue'],2);
// if($Action=="new")
// {
//   mysqli_query($conn, "INSERT INTO customers(Name,ContactNo,Address,OpeningDue,TotalDue) VALUES ('$Name','$ContactNo','$Address', $OpeningDue,$TotalDue)");
//   echo $_POST['OpeningDue'];
// }
// else if($Action=="edit")
// {
    
//       $sql = "select * from customers where id="+$id;
//       $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($conn));
      
//       $array = array();
//     while($row =mysqli_fetch_assoc($result))
//     {
//       $array  = $row;
//     }
    
//      echo json_encode($array);

    
// }




}
?>