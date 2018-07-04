<?php
$table = 'persons';
 
$primaryKey = 'Name';
 
$columns = array(
    array( 'db' => 'Name', 'dt' => 0 ),
    array( 'db' => 'Type',  'dt' => 1 ),
    array( 'db' => 'Plays',   'dt' => 2 ),
   

      
    )
   
);
 
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'first_db',
    'host' => 'localhost'
);
 
 
//require( 'showcode.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
?>