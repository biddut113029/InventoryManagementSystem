<!DOCTYPE html>
<html>
<head>


<?php include 'imsheader.php';?>
<?php include 'ims_db_connect.php';?>
<body>





<div class="container" style="background-color: #e0ebeb;">
<div class="form-group" >
 <div class="col-md-4" style="background-color:#c2d1f0; border-radius: 2 px; padding: 44px;" >
      
       <div class="form-group row">
                <label class=" control-label col-md-4">Challan No</label>
                <div class="col-md-8">
                    <input class="form-control" placeholder=Inv-00001  oninput="UnitPriceChanged()" type="text" id="InvoiceNo">
                </div>
               
            </div>
            
             
         
      
 </div>
  <div class="col-md-4" style="background-color:#c2d1f0; border-radius: 2 px; padding: 44px;" >
      
      
      
             <div class="form-group row">
                <label class=" control-label col-md-4">Chall. Date</label>
                <div class="col-md-8">
                 <input class="form-control"  type="date" name="bday" min="2000-01-02">
                   
                </div>
               </div>
            
 </div>
  
   <div class="col-md-4" style="background-color:#c2d1f0; border-radius: 2 px; padding: 44px;" >
        <div class="form-group row">
                <label class=" control-label col-md-3">Supplier</label>
                <div class="col-md-9">
                    <select class=" form-control" id="customers">
                    <option value="" selected="selected">Select Supplier Name</option>
                    
                    
                    <?php
                    
                    
                   
                    
                    $sql = "SELECT ID, Name FROM suppliers";
                    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                    while( $rows = mysqli_fetch_assoc($resultset) ) {
                    ?>
                    <option value="<?php echo $rows["ID"]; ?>"><?php echo $rows["Name"]; ?></option>
                    <?php } ?>
                    </select>
                </div>
               
            </div>
            
            
            <!--  <div class="form-group row">-->
            <!--    <label class=" control-label col-md-3">Quantity</label>-->
            <!--    <div class="col-md-9">-->
            <!--        <input class="form-control" placeholder=0  oninput="UnitPriceChanged()" type="number" id="Quantity">-->
            <!--    </div>-->
               
            <!--</div>-->
            
      
 </div>
  
 
 </div>
 </div>











<div class="container" style="background-color: #e0ebeb;">
  
  <form >
      
      
      
      
        <div class="col-md-6 form-group" style="background-color: 	 #ffccff; border-radius: 5px; padding: 20px;">

           <!--<div class="form-group row">-->
           <!--     <label class="control-label col-md-3" for="ProductID">Product Name</label>-->
           <!--     <div class="col-md-6">-->
           <!--         <select class="form-control" data-val="true" id="ProductID">-->
           <!--             <option value="">-- SelectProduct --</option>-->
           <!--             <option value="1">ProductA</option>-->
           <!--             <option value="1">ProductB</option>-->
           <!--         </select>-->
           <!--     </div>-->
              
           <!-- </div>-->
            
            
            
             <div class="form-group row">
                <label class=" control-label col-md-3">Product</label>
                <div class="col-md-9">
                    <select class=" form-control"  id="ProductID">
                    <option value="" selected="selected">Select Product Name</option>
                    
                    
                    <?php
                    
                    
                   
                    
                    $sql = "SELECT ID, Name FROM products";
                    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                    while( $rows = mysqli_fetch_assoc($resultset) ) {
                    ?>
                    <option value="<?php echo $rows["ID"]; ?>"><?php echo $rows["Name"]; ?></option>
                    <?php } ?>
                    </select>
                </div>
               
            </div>

            <div class="form-group row">
                <label class=" control-label col-md-3">Quantity</label>
                <div class="col-md-6">
                    <input class="form-control" placeholder=0  oninput="UnitPriceChanged()" type="number" id="Quantity">
                </div>
               
            </div>
            <div class="form-group row">
                <label class=" control-label col-md-3">Unit Price</label>
                <div class="col-md-6">
                    <input class="form-control" placeholder=0  oninput="UnitPriceChanged()"  type="number" id="UnitPrice">
                </div>
               
            </div>
            <div class="form-group row">
                <label class=" control-label col-md-3">Discount</label>
                <div class="col-md-6">
                    <input class="form-control" placeholder=0  oninput="UnitPriceChanged()"     type="number" id="Discount">
                </div>
               
            </div>

            <div class="form-group row">
                <label class=" control-label col-md-3"> Unit Rate</label>
                <div class="col-md-6">
                    <input class="form-control"   placeholder=0  type="number"  id="UnitRate">
                </div>
              
            </div>
         <div class="form-group row">
                <label class=" control-label col-md-3">Total Price</label>
                <div class="col-md-6">
                    <input class="form-control" placeholder=0  type="number" id="TotalPrice">
                </div>
              
            </div>
            
       


           
            <div class="form-group">
                <label class=" control-label col-md-3"></label>
                  
                <div class="col-md-6"> 
       
                <input type="button" style="background-color:  #c3c388;" class="form-control" id ="SaveOrUpdate" onclick="AddToOrder()" value="Add To Order">
                </div>
            </div>


           
        </div>
        
        <div class="col-md-6 form-group" style="background-color:  #c3c388; border-radius: 5px; padding: 20px;">
 
 
 <table id="example" class="display" cellspacing="0" width="100%" height="200px">
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>Discount</th>
                <th>Unit Rate</th>
                <th>Total Price </th>
                
            </tr>
        </thead>
       
    </table>
      </div>
       
   
     
  </form>
</div>







<div class="container" style="background-color: #e0ebeb;">
<div class="form-group" >
 <div class="col-md-4" style="background-color:#c2d1f0; border-radius: 2 px; padding: 44px;" >
      
       <div class="form-group row">
                <label class=" control-label col-md-5">Grand Total:</label>
                <div class="col-md-7">
                    <input class="form-control" placeholder=0  oninput="UnitPriceChanged()" type="number" id="GrandTotal">
                </div>
               
            </div>
            
            <div class="form-group row">
                <label class=" control-label col-md-5">Flat Discout(%)</label>
                <div class="col-md-7">
                    <input class="form-control" placeholder=0  oninput="UnitPriceChanged()" type="number" id="Quantity">
                </div>
               
            </div>
            
                 <div class="form-group row">
                <label class=" control-label col-md-5">Total Flat</label>
                <div class="col-md-7">
                    <input class="form-control" placeholder=0  oninput="UnitPriceChanged()" type="number" id="Quantity">
                </div>
               
            </div>
            
         
      
 </div>
  <div class="col-md-4" style="background-color:#c2d1f0; border-radius: 2 px; padding: 44px;" >
      
      
       <div class="form-group row">
                <label class=" control-label col-md-5">Total Discount</label>
                <div class="col-md-7">
                    <input class="form-control" placeholder=0  oninput="UnitPriceChanged()" type="number" id="Quantity">
                </div>
               
            </div>
      
             <div class="form-group row">
                <label class=" control-label col-md-5">Net Amount</label>
                <div class="col-md-7">
                    <input class="form-control" placeholder=0  oninput="UnitPriceChanged()" type="number" id="Quantity">
                </div>
               
            </div>
            
            <div class="form-group row">
                <label class=" control-label col-md-5">Paid Amount</label>
                <div class="col-md-7">
                    <input class="form-control" placeholder=0  oninput="UnitPriceChanged()" type="number" id="Quantity">
                </div>
               
            </div>
                  
         
            
 </div>
  
   <div class="col-md-4" style="background-color:#c2d1f0; border-radius: 2 px; padding: 44px;" >
    
               
            <div class="form-group row">
                <label class=" control-label col-md-5">Adjust Amt</label>
                <div class="col-md-7">
                    <input class="form-control" placeholder=0  oninput="UnitPriceChanged()" type="number" id="Quantity">
                </div>
               
            </div>
            
              
            <div class="form-group row">
                <label class=" control-label col-md-5">Current Due</label>
                <div class="col-md-7">
                    <input class="form-control" placeholder=0  oninput="UnitPriceChanged()" type="number" id="Quantity">
                </div>
               
            </div>
             <div class="form-group row">
                <label class=" control-label col-md-5">Total Due</label>
                <div class="col-md-7">
                    <input class="form-control" placeholder=0  oninput="UnitPriceChanged()" type="number" id="Quantity">
                </div>
               
            </div>
            
            
             <div class="form-group">
              <div class="col-md-6"> 
       
                <input type="button" style="background-color: #ff80bf;" class="form-control" id ="SaveOrUpdate" onclick="AddToOrder()" value="Save">
                </div>
                <div class="col-md-6"> 
       
                <input type="button" style="background-color: #ff80bf;" class="form-control" id ="SaveOrUpdate" onclick="AddToOrder()" value="Close">
                </div>
            </div>
            
      
 </div>
  
 
 </div>
 </div>




<script type="text/javascript">  

var orderDetails = []; 
var dataSet=[];



function UnitPriceChanged() {
    
      var UnitPrice = document.getElementById("UnitPrice").value;
      var Quantity = document.getElementById("Quantity").value;
      var Discount = document.getElementById("Discount").value;
      if(!Discount)
      Discount=0;
      var UnitRate= UnitPrice - UnitPrice* Discount*0.01;
      var TotalPrice= UnitPrice*Quantity - UnitPrice*Quantity* Discount*0.01;
      document.getElementById("UnitRate" ).value=UnitRate;
      document.getElementById("TotalPrice" ).value=TotalPrice;
}



function AddToOrder() {
     var ProductID = document.getElementById("ProductID").value;
     var UnitPrice = document.getElementById("UnitPrice").value;
      var Quantity = document.getElementById("Quantity").value;
      var Discount = document.getElementById("Discount").value;
      if(!Discount)
      Discount=0;
      var UnitRate= UnitPrice - UnitPrice* Discount*0.01;
      var TotalPrice= UnitPrice*Quantity - UnitPrice*Quantity* Discount*0.01;
     


orderDetails.push([ ProductID, Quantity , UnitPrice,  Discount, UnitRate,TotalPrice ]);


    $('#example').DataTable( {
        
        data: orderDetails,
        
         "bDestroy": true
    } );




 document.getElementById("UnitRate" ).value=0;
 document.getElementById("TotalPrice").value=0;
 document.getElementById("UnitPrice").value=0;
 document.getElementById("Quantity").value=0;
 document.getElementById("Discount").value=0;

}


$(document).ready(function() {
    var selected = [];
 
    $("#Customers").DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "Objects.php",
        "rowCallback": function( row, data ) {
            if ( $.inArray(data.DT_RowId, selected) !== -1 ) {
                $(row).addClass('selected');
            }
        }
    });
 




    $('#Customers tbody').on('click', 'tr', function () {
        var id = this.id;
        var index = $.inArray(id, selected);
 
        if ( index === -1 ) {
            selected.push( id );
        } else {
            selected.splice( index, 1 );
        }
 
        $(this).toggleClass('selected');
    } );
} );


</script>


</body>
<?php include 'imsfooter.php';?>
</html>