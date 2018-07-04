
var response = '';
$(document).ready(function(){
    
    $.ajax({ type: "GET",   
         url:'Persons.php', 
         async: false,
         success : function(text)
         {

  
                      response = text;
         }
    });

   // alert(response);
$('#persons').DataTable({
   ajax: {
     url: 'persons.php',
     dataSrc: function( response) {
       var tableData = [];
       $.each(data, function(key, value) {
         tableData.push([value[0], value[1], value[2]]);
       });
       return tableData
     }
   },
   columns: [
     { data: 0, Name :'1'}, //TODO, add some meaningful titles
     { data: 1, Types: '2'},
     { data: 2, Plays: '3'},
    
   ]
})  





});

