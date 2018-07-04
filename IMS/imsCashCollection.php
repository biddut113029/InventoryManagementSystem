<!DOCTYPE html>
<html>
<head>


<?php include 'imsheader.php';?>
<?php include 'ims_db_connect.php';?>
<body>



<div class="container">
<div class="form-group" >
  <div class="col-md-4" style="background-color:#b3ccff; border-radius: 2 px; padding: 44px;" >
     
   
     
     <div class="form-group">
     <label id="id">0</label>
      <label id="Action">New </label>
      <label id="">Cash Collection from Customer </label>
    </div>
    
    
    
        <div class="form-group">
                 <div class="col-md-5"> 
               <span class="glyphicon glyphicon-calendar"> EntryDate</span>
                </div>
              <div class="col-md-7">
                 <input class="form-control"  type="date" name="bday" min="2000-01-02"> <br>
                   
                </div>
        </div>

 
        <div class="form-group">
        
            <div class="col-md-5"> 
            <span class="glyphicon glyphicon-user"> Customer</span>
            </div>
            <div class="col-md-7"> 
            <select class=" form-control" id="Name">
                    <option value="" selected="selected">Select Customer Name</option>
                    
                    
                    <?php
                    
                    
                   
                    
                    $sql = "SELECT ID, Name FROM customers";
                    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                    while( $rows = mysqli_fetch_assoc($resultset) ) {
                    ?>
                    <option value="<?php echo $rows["ID"]; ?>"><?php echo $rows["Name"]; ?></option>
                    <?php } ?>
                    </select> <br>
            </div>
        
        </div>

   
    <div class="form-group">
    <div class="col-md-5"> 
    <span>Pay Type </span>
    </div>
     <div class="col-md-7"> 
    <input type="text" class="form-control" id="ContactNo"   placeholder= "cash"   value=""><br>
    </div>
   
   </div>
   
   
   
   
   
       
    <div class="form-group">
    <div class="col-md-5"> 
    <span > Amount</span>
    </div>
     <div class="col-md-7"> 
       <input type="number" class="form-control" id="OpeningDue"  oninput="UnitPriceChanged()" placeholder= "0"         value=""><br>
    </div>
   
   </div>
   
   
   <div class="form-group">
    <div class="col-md-5"> 
    <span>Adjustment.</span>
    </div>
     <div class="col-md-7"> 
       <input type="number" class="form-control" id="AdjustAmt"  oninput="UnitPriceChanged()" placeholder= "0"         value=""><br>
    </div>
   
   </div>
   
           
    <div class="form-group">
    <div class="col-md-5"> 
    <span> BalanceDue</span>
    </div>
     <div class="col-md-7"> 
       
    <input type="number" class="form-control" id="TotalDue"      placeholder= "TotalDue"      value=""> <br>
    </div>
   
   </div>
   
   
     
    <div class="form-group">
    <div class="col-md-5"> 
    <span > Remarks</span>
    </div>
     <div class="col-md-7"> 
      <textarea class="form-control" rows="4" id="Address"  placeholder= "cash receive"   value=""></textarea>

    </div>
   
   </div>
   
     <div class="form-group">
    <div class="col-md-5"> 
    
    </div>
     <div class="col-md-7"> 
       
    <input type="button" style="background-color: #b3ecff;" class="form-control" id ="SaveOrUpdate" onclick="myFunction()"  value="save">
    </div>
   
   </div>
   
 
</div>

  <div class="col-md-8"  style="background-color: #b3ecff; border-radius: 3 px; padding: 20px;">
         
      <table id="Customers" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>PayType</th>
                <th>Amount</th>
                <th>Blanace Due</th>
                <th>Action</th>
            </tr>
        </thead>
       
    </table>
  </div>
  
</div>
</div>







</body>
<?php include 'imsfooter.php';?>
</html>





















<script type="text/javascript">  

 var selected = [];
    var table ;


function UnitPriceChanged() {
    
      var OpeningDue = document.getElementById("OpeningDue").value;
    
      document.getElementById("TotalDue" ).value=OpeningDue;
}


function ClearFunction() {
    
     document.getElementById("id").style.visibility = "hidden";
     
     
    document.getElementById("TotalDue").disabled =true;
     
   document.getElementById("Name" ).value="";
      document.getElementById("ContactNo" ).value="";
       document.getElementById("Address").value="";
        document.getElementById("OpeningDue").value="0";
         document.getElementById("TotalDue").value="0";
          document.getElementById('Action').innerHTML="New";
            document.getElementById('id').innerHTML="0";
             document.getElementById('SaveOrUpdate').value="save";
            
  table=$("#Customers").DataTable({
        "processing": true,
        "serverSide": true,
         "scrollY":'70vh',
        "ajax": "imsGetAllCustomers.php",
        "scrollCollapse": true,
        "destroy": true,
        
          "columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": "<button id='edit'>Edit</button> <button id='delete'>Delete</button>"
        } ]
        
    });
   
      
      
      
       
    }


function myFunction() {
   var Action=      document.getElementById('SaveOrUpdate').value;   
   var id=      document.getElementById('id').innerHTML; 
    var Name = document.getElementById("Name" ).value;
     var ContactNo = document.getElementById("ContactNo" ).value;
      var Address = document.getElementById("Address").value;
       var OpeningDue = document.getElementById("OpeningDue").value;
        var TotalDue = document.getElementById("TotalDue").value;
        var datastring= 'Action='+Action+'&id='+id +'&Name='+Name+'&ContactNo='+ContactNo+'&Address='+Address+'&OpeningDue='+OpeningDue+'&TotalDue='+TotalDue;
    

    $.ajax({
type: "POST",
url: "imsCustomersCode.php",
data: datastring,
cache: false,
success: function(html) {
ClearFunction();
alert(html);


}
});

}




 function RefreshControl(obj)
 
 {
      document.getElementById('Action').innerHTML="update";
      document.getElementById('id').innerHTML=obj['ID'];
       document.getElementById('SaveOrUpdate').value="update";
       
      document.getElementById("Name" ).value=obj['Name'];
      document.getElementById("ContactNo" ).value=obj['ContactNo'];
      document.getElementById("Address").value=obj['Address'];
      document.getElementById("OpeningDue").value=obj['OpeningDue'];
      document.getElementById("TotalDue").value=obj['TotalDue'];
    
     
 }



$(document).ready(function() {
   
 
ClearFunction();

 $('#Customers tbody').on( 'click', '#edit', function () {
        var data = table.row( $(this).parents('tr') ).data();
      
         var dataid='Action='+'edit'+'&id='+data[4] +'&Name='+'d'+'&ContactNo='+0+'&Address='+'sd'+'&OpeningDue='+0+'&TotalDue='+0;
         
    $.ajax({
  url: "imscustomeredit.php",
  type: "get", //send it through get method
  data: { 
    ajaxid: data[4], 
    status: 'update', 
    EmailAddress: 0
  },
  datatype:'json',
  success: function(response) {
       alert( response );
       var obj=JSON.parse(response);
       RefreshControl(obj);
       
  
    
       
       
       
       
       
    //Do Something
  },
  error: function(xhr) {
    //Do Something to handle error
  }
});   
                  
     
       // alert( data[0] +"'s salary is: "+ data[ 4 ] );
    } );


 $('#Customers tbody').on( 'click', '#delete', function () {
    
    var data = table.row( $(this).parents('tr') ).data();
    
    var dataid='Action='+'delete'+'&id='+data[4] +'&Name='+'d'+'&ContactNo='+0+'&Address='+'sd'+'&OpeningDue='+0+'&TotalDue='+0;
    alert( "Do You Want To Delete " +data[0]);
    
    $.ajax({
  url: "imscustomeredit.php",
  type: "get", //send it through get method
  data: { 
    ajaxid: data[4], 
    status: 'delete'
   
  },
  datatype:'json',
  success: function(response) {
       
      
      
      ClearFunction();
      
      
      
      
      
      
      
      
      
  },
  error: function(xhr) {
    //Do Something to handle error
  }
});   
                  
     
       // alert( data[0] +"'s salary is: "+ data[ 4 ] );
    } );
    

    // $('#Customers tbody').on('click', 'tr', function () {
    //     var id = this.id;
    //     var index = $.inArray(id, selected);
 
    //     if ( index === -1 ) {
    //         selected.push( id );
    //     } else {
    //         selected.splice( index, 1 );
    //     }
 
    //     $(this).toggleClass('selected');
    // } );
} );


</script>

