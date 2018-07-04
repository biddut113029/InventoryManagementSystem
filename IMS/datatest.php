
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">


<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">







<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.input_form {
    width:300px;
    border-radius: 5px;
    background-color: #d9b3ff;
    padding: 20px;
    margin-left: 20px;
}
</style>
<body>


<div  class="input_form">
 <form action="CreatePerson.php" method="post">
    <label for="fname"> Name</label>

<input type="text" id="Name"  name="Name" placeholder="name.." required="required"/> <br/>



    <label for="lname">Type</label>
 <input type="text" id="Type"  name="Type" placeholder="Type.."  required="required"/> 

      <label for="Plays">Plays</label>
 <input type="text" id="Plays"  name="Plays" placeholder="Plays.."  required="required"/> 


  <label for="Nobels">Nobels</label>
 <input type="text" id="Nobels"  name="Nobels" placeholder="Nobels.."  required="required"/> 



   <label for="Poems">Poems</label>
 <input type="text" id="Poems"  name="Poems" placeholder="Poems.."  required="required"/> 


   <label for="Essays">Type</label>
 <input type="text" id="Essays"  name="Essays" placeholder="Essays.."  required="required"/>

   <label for="Address">Type</label>
 <input type="text" id="Address"  name="Address" placeholder="Address.."  required="required"/> 



    <label for="Country">Country</label>
    <select id="Country" name="Country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>

<div>

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Plays</th>
                <th>Poems</th>
             
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Plays</th>
                <th>Poems</th>
              
            </tr>
        </tfoot>
    </table>

    <div>




</body>
</html>


















<script type="text/javascript">   
$(document).ready(function() {
    var selected = [];
 
    $("#example").DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "Objects.php",
        "rowCallback": function( row, data ) {
            if ( $.inArray(data.DT_RowId, selected) !== -1 ) {
                $(row).addClass('selected');
            }
        }
    });
 
    $('#example tbody').on('click', 'tr', function () {
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

