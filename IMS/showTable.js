$(document).ready(function(){

$('#example').DataTable();

  $("#myBtn").click(function(){
    //disable the submit button
    $(this).attr('disabled','true');$(this).css('cursor','progress');$(this).html('processing');
    $.ajax({
      url: 'Persons.php',
      success: function(data,status)
      {
        createTableByForLoop(data);
        createTableByJqueryEach(data);
        //enable the submit button
        $('#myBtn').css('cursor','pointer');$('#myBtn').html('Submit');$('#myBtn').removeAttr('disabled');
      },
      async:   true,
      dataType: 'json',




    }); 
  });
});
 
function createTableByForLoop(data)
{

  var table = $('#example').DataTable();
 table.row.add( {
        "name":       "Tiger Nixon",
        "position":   "System Architect",
        "salary":     "$3,120",
        "start_date": "2011/04/25",
        "office":     "Edinburgh",
        "extn":       "5421"
    } ).draw();


  var eTable=""
  for(var i=0; i<data.length;i++)
  {
    eTable += "<tr>";
    eTable += "<td>"+data[i]['Name']+"</td>";
    eTable += "<td>"+data[i]['Type']+"</td>";
    eTable += "<td>"+data[i]['Plays']+"</td>";
    eTable += "</tr>";
  }
  
  $('#example').append(eTable);


// $('#forTable').html(eTable);
}
 
