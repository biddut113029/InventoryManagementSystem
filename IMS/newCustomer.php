<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>


  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>




  <style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
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

<div class="container">

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-primary btn-lg" id="myBtn">Create New Customer</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-user"></span> New Customer</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
        

          <form role="form">
            <div class="form-group">

              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Name</label>
              <input type="text"  class="form-control" id="Name"   placeholder= "Name"   value=""><br>
             
            </div>

             <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-phone-alt"></span> Contact No</label>        
             <input type="text" class="form-control" id="ContactNo"   placeholder= "ContactNo"   value=""><br>
            </div>

             <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-home"></span>Address</label>               
             <input type="text" class="form-control"  id="Address"       placeholder=  "Address"   value=""><br>
            </div>
       
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-retweet"></span> Opening Due</label>
              <input type="number" class="form-control" id="OpeningDue"  placeholder= "OpeningDue"     oninput="OpeningDueChange()"    value=""><br>
            
            </div>

            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-retweet"></span> TotalDue</label>
            <input type="number" class="form-control" id="TotalDue"    placeholder= "TotalDue"   disabled   value="">
             
            </div>



 <div class="modal-footer">
    <button type="button" class="btn btn-primary" onclick="myFunction()"  >Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>



            </div>
              
          </form>
        </div>
     
      </div>
      
    </div>
  </div> 
</div>
 

<div class="div_datatable">
 
<table id="Customers" class="display" cellspacing="0" width="100%"  >
        <thead>
            <tr>
                <th>Name</th>
                <th>ConatctNo</th>
                <th>Addrees</th>
                   <th>OpeningDue</th>
                      <th>TotalDue</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                    <th>Name</th>
                <th>ConatctNo</th>
                <th>Addrees</th>
                   <th>OpeningDue</th>
                      <th>TotalDue</th>
            </tr>
        </tfoot>
    </table>
</div>

<script type="text/javascript">  

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

             $('td', row).css('background-color', '#e6ffcc');

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


<script>
function OpeningDueChange()
{

 document.getElementById("TotalDue").value=document.getElementById("OpeningDue").value  ;

}

function ClearFunction() {
  document.getElementById("Name" ).value="";
      document.getElementById("ContactNo" ).value="";
       document.getElementById("Address").value="";
        document.getElementById("OpeningDue").value="";
         document.getElementById("TotalDue").value="";


  
    }


function myFunction() {
    var Name = document.getElementById("Name" ).value;
     var ContactNo = document.getElementById("ContactNo" ).value;
      var Address = document.getElementById("Address").value;
       var OpeningDue = document.getElementById("OpeningDue").value;
        var TotalDue = document.getElementById("TotalDue").value;
        var datastring='Name='+Name+'&ContactNo='+ContactNo+'&Address='+Address+'&OpeningDue='+OpeningDue+'&TotalDue='+TotalDue;
    

    $.ajax({
type: "POST",
url: "CutomersCode.php",

data: datastring,
cache: false,
success: function(html) {

ClearFunction();


  
   

}
});



}
</script>






<script>


$(document).ready(function() {
    $("#myModal").modal({
        show: false,
        backdrop: 'static',
     
        keyboard: false
    });
    
    $("#myBtn").click(function() {
      

       $('#myModal').modal({
   backdrop: 'static',
   keyboard: false
});           
    });
});



</script>

</body>
</html>