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




<div class="container"   style="background-image:url(imspicofhomepage.jpg)"   >
<div class="form-group" >
     <div class="col-md-4" >
        
  
  </div>
  
  <div class="col-md-4" style="background-color:#b3e5b3; border-radius: 2 px; padding: 44px;" >
      <h1> WelCome to  our City Pharmacy</h1>
  <button type="button" class="btn btn-primary btn-lg" id="myBtn">Login</button>
  <button type="button" class="btn btn-primary btn-lg" id="newUser">Register</button>
  
  </div>
 
   </div>
  
  </div>
  
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

              <label for="usrname"><span class="glyphicon glyphicon-user"></span>User Name</label>
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
          <h4><span class="glyphicon glyphicon-user"></span>new User</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
        
            <label id="exist" style="padding:2px 120px; color: #ff0000 " ></label>

          <form role="form">
            <div class="form-group">

              <label for="usrname"><span class="glyphicon glyphicon-user"></span>User Name</label>
              <input type="text"  class="form-control" id="username"   placeholder= "Name"   value=""><br>
             
            </div>

             <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-phone-alt"></span>ContactNo</label>        
             <input type="text" class="form-control" id="contactno"   placeholder= "Contact No"   value=""><br>
            </div>
            
              <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-asterisk"></span>Email</label>        
             <input type="text" class="form-control" id="email"   placeholder= "Email"   value=""><br>
            </div>
              <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-eye-open"></span>Password</label>        
             <input type="password" class="form-control" id="password2"  placeholder= "Password"   value=""  ><br>
            </div>

     <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="newUser()"  >Register</button>
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
    document.getElementById("UserName" ).value="";
     document.getElementById("password" ).value="";
    }
function ClearUser() {
    document.getElementById("username" ).value="";
    document.getElementById("contactno" ).value="";
    document.getElementById("email" ).value="";
    document.getElementById("password2" ).value="";
       
       
  
    }


function myFunction() 
{
     var username = document.getElementById("UserName" ).value;
     var password = document.getElementById("password" ).value;
     
     
     
  
        $.ajax({
              type: "Post",
              url: "imscheckuser.php",
              success: function(data) {
                    var obj = $.parseJSON(data);   
                    var i=0;
                    var found=0;
                
                for(i=0;i<obj.data.length;i++)
                {
                    if(obj.data[i][0]==username && obj.data[i][1]==password )
                    {
                        found=1;
                      window.location = "imshome.php"
                      
                    }
                }
                 if(found==0)
                 document.getElementById("success" ).innerHTML="Invalid";
                 
                 
              }
        }); 
    
     
     ClearFunction();
}


function newUser()
{
    var username = document.getElementById("username" ).value;
    var contactno = document.getElementById("contactno" ).value;
     var email = document.getElementById("email" ).value;
     var password = document.getElementById("password2" ).value;

    
    var datastring='username='+username+'&contactno='+contactno+'&email='+email+'&password='+password;
    
    
    
     $.ajax({
              type: "Post",
              url: "imscheckuser.php",
              success: function(data) {
                    var obj = $.parseJSON(data);   
                    var i=0;
                    var found=0;
                
                for(i=0;i<obj.data.length;i++)
                {
                    if(obj.data[i][0]==username  )
                    {
                        found=1;
                    
                      
                    }
                }
                 if(found==1)
                 {
                     document.getElementById("exist" ).innerHTML="This user name already exist";  
                 }
                 else
                 
                 {
                       document.getElementById("exist" ).innerHTML=""; 
                       document.getElementById("success" ).innerHTML=""; 
                     $.ajax({
                         type: "POST",
                         url: "imsregistration.php",
                         data: datastring,
                        cache: false,
                        success: function(html) {

                        ClearUser();
                        }
                        });
                     
                 }
                 
                 
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