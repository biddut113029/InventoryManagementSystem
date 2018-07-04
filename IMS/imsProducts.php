<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

<?php include 'imsheader.php';?>
<?php include 'ims_db_connect.php';?>



<div class="container">
<div class="form-group" >
  <div class="col-md-2" style=" border-radius: 2 px; padding: 44px;" >    </div>
  <div class="col-md-8"  style="background-color: #c2d1f0; border-radius: 3 px; padding: 20px;">  
  
  
<button type="button" class="btn btn-primary btn-lg" id="newUser">New Product</button>

 <table id="Suppliers" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Pur Price</th>
                <th>Sales Price</th>
                <th>Action</th>
            </tr>
        </thead>
       
    </table>

  
  </div>
  <div class="col-md-2" style=" border-radius: 2 px; padding: 44px;" >    </div>
</div>
</div>













  <style>
  .modal-header, h4, .close {
      background-color:#800000;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }

  .container
  {
  margin-top: 50px;
  }

  table.dataTable thead {background-color: #bf80ff }  

 .div_datatable {
       width: 80%;
       margin-left: 100px;
       background-color:  #ccffdd;
  }

  </style>
</head>
<body>


  
  



  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:29px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-user"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
        
         <label id="success" style="padding:2px 120px; color: #ff0000 " ></label> 

          <form role="form">
            <div class="form-group">

              <label for="usrname"><span class="glyphicon glyphicon-user"></span>Product Name</label>
              <input type="text"  class="form-control" id="UserName"   placeholder= "Name"   value=""><br>
             
            </div>

             <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-eye-open"></span>Password</label>        
             <input type="text" class="form-control" id="password"   placeholder= "Password"   value=""><br>
            </div>

 <div class="modal-footer">
            
    <button type="button" class="btn btn-primary" onclick="myFunction()"  >Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>

            </div>
              
          </form>
        </div>
     
      </div>
      
    </div>
    
    
    
      <div class="modal fade" id="registration" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Product Congiguration</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
        
            <label id="exist" style="padding:2px 120px; color: #ff0000 " ></label>

          <form role="form">
            <div class="form-group">
              <label id="id">0</label>
              <label for="usrname">Code</label>
              <input type="text"  class="form-control" id="Code"   placeholder= "0000"   value=""><br>
             
            </div>

             <div class="form-group">
              <label for="usrname"><span></span> Product Name</label>        
             <input type="text" class="form-control" id="Name"   placeholder= "name"   value=""><br>
            </div>
            
              <div class="form-group">
              <label for="usrname">Pur. Rate</label>        
             <input type="text" class="form-control" id="PurRate"   placeholder= "Email"   value=""><br>
            </div>
              <div class="form-group">
              <label for="usrname">Sakes Rate</label>        
             <input type="text" class="form-control" id="SalesRate"   placeholder= "Email"   value=""><br>
            </div>

     <div class="modal-footer">
        <button type="button" class="btn btn-primary" id ="SaveOrUpdate" onclick="newUser()" value="save"  >Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>

            </div>
              
          </form>
        </div>
     
      </div>
      
    </div>
    
    
    
    
    
    
    
  </div> 
</div>
 






<script>
























 function ClearFunction() {
  
     document.getElementById("Code" ).value="";
    document.getElementById("Name" ).value="";
    document.getElementById("PurRate" ).value="";
    document.getElementById("SalesRate" ).value="";
    }
function ClearUser() {
   
       
       
  
    }


function myFunction() 
{
     var username = document.getElementById("Code" ).value;
     var password = document.getElementById("Name" ).value;
     
     
     
  
        // $.ajax({
        //       type: "Post",
        //       url: "imscheckuser.php",
        //       success: function(data) {
        //             var obj = $.parseJSON(data);   
        //             var i=0;
        //             var found=0;
                
        //         for(i=0;i<obj.data.length;i++)
        //         {
        //             if(obj.data[i][0]==username && obj.data[i][1]==password )
        //             {
        //                 found=1;
        //               window.location = "imshome.php"
                      
        //             }
        //         }
        //          if(found==0)
        //          document.getElementById("success" ).innerHTML="Invalid";
                 
                 
        //       }
        // }); 
    
     
     ClearFunction();
}


function newUser()
{
    
    var Status=document.getElementById("SaveOrUpdate" ).value;
    var Code = document.getElementById("Code" ).value;
    var Name = document.getElementById("Name" ).value;
     var PurRate= document.getElementById("PurRate" ).value;
     var SalesRate = document.getElementById("SalesRate" ).value;
      var id=document.getElementById('id').innerHTML;
  
     document.getElementById("id").style.visibility = "hidden";
    
    var datastring= 'id='+id+'&Status='+Status+  '&Code='+Code+'&Name='+Name+'&PurRate='+PurRate+'&SalesRate='+SalesRate;
    
     $.ajax({
                         type: "POST",
                         url: "imsProductInsert.php",
                         data: datastring,
                        cache: false,
                        success: function(html) {

                        ClearFunction() ;
                        }
                        });
    

    

}




 function RefreshControl(obj)
 
 {
    //   document.getElementById('Action').innerHTML="update";
    //   document.getElementById('id').innerHTML=obj['ID'];
    //   document.getElementById('SaveOrUpdate').value="update";
       
    //   document.getElementById("name" ).value=obj['Name'];
    //   document.getElementById("contactno" ).value=obj['ContactNo'];
   
    //   document.getElementById("Address").value=obj['Address'];
    //   document.getElementById("OpeningDue").value=obj['OpeningDue'];
    //   document.getElementById("TotalDue").value=obj['TotalDue'];
    
     document.getElementById("id").style.visibility = "hidden";
      document.getElementById("Code" ).value=obj['Code'];
    document.getElementById("Name" ).value=obj['name'];
    document.getElementById("PurRate" ).value=obj['price'];
    document.getElementById("SalesRate" ).value=obj['price'];
       document.getElementById('id').innerHTML=    obj['id'];
       
 }






$(document).ready(function() {
    
    
      table=$("#Suppliers").DataTable({
        "processing": true,
        "serverSide": true,
         "scrollY":'50vh',
        "ajax": "imsGetAllProducts.php",
        "scrollCollapse": true,
        "destroy": true,
        
          "columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": "<button id='edit'>Edit</button> <button id='delete'>Delete</button>"
        } ]
        
    });
    
    
    
    
 $('#Suppliers tbody').on( 'click', '#edit', function () {
        var data = table.row( $(this).parents('tr') ).data();
      
         var dataid='Action='+'edit'+'&id='+data[4] +'&Name='+'d'+'&ContactNo='+0+'&Address='+'sd'+'&OpeningDue='+0+'&TotalDue='+0;
         
    $.ajax({
  url: "imsProductsedit.php",
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
        document.getElementById('SaveOrUpdate').value="update";
RefreshControl(obj);
       
         $('#registration').modal({
           backdrop: 'static',
           keyboard: false
              });           

  },
  error: function(xhr) {
    //Do Something to handle error
  }
});   
                  
     
       // alert( data[0] +"'s salary is: "+ data[ 4 ] );
    } );
    
    
    
    
    
    
    
 $('#Suppliers tbody').on( 'click', '#delete', function () {
    
    var data = table.row( $(this).parents('tr') ).data();
    
    var dataid='Action='+'delete'+'&id='+data[4] +'&Name='+'d'+'&ContactNo='+0+'&Address='+'sd'+'&OpeningDue='+0+'&TotalDue='+0;
    alert( "Do You Want To Delete " +data[0]);
    
    $.ajax({
  url: "imsProductsedit.php",
  type: "get", //send it through get method
  data: { 
    ajaxid: data[4], 
    status: 'delete'
   
  },
  datatype:'json',
  success: function(response) {
       

      
      alert("Deleted Successfully");
      
      
      
      
  },
  error: function(xhr) {
    //Do Something to handle error
  }
});   
                  
     
       // alert( data[0] +"'s salary is: "+ data[ 4 ] );
    } );
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
 
    
    
    
   
    $("#myModal").modal({
        show: false,
        backdrop: 'static',
     
        keyboard: false
    });
    
    
    
    
    $("#myBtn").click(function() {
      document.getElementById("exist" ).innerHTML=""; 
    document.getElementById("success" ).innerHTML=""; 
       $('#myModal').modal({
   backdrop: 'static',
   keyboard: false
      });           
    });
    
       $("#registration").modal({
        show: false,
        backdrop: 'static',
     
        keyboard: false
    });
    
     $("#newUser").click(function() {
         
       document.getElementById("exist" ).innerHTML=""; 
    document.getElementById("success" ).innerHTML=""; 

       $('#registration').modal({
   backdrop: 'static',
   keyboard: false
      });           
    });
    
    
    
});



</script>

</body>
</html>