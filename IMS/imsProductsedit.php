
<?php include 'ims_db_connect.php';?>

<?php



 $_GET['status'];
  $_GET['ajaxid'];

    if( $_GET['status']=='update')
    {
     $sql = "select * from products where ID=  ".$_GET['ajaxid'] ;
      $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($conn));
      
      $array = array();
    while($row =mysqli_fetch_assoc($result))
    {
      $array  = $row;
    }
   
     echo json_encode($array);
    }
    else   if ( $_GET['status']=='delete')
    {
         $sql = "delete from products where ID=  ".$_GET['ajaxid'] ;
      $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($conn));
    }
   
   

?>