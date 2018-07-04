<html>
	<head>
	<title>Datatables</title>
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"> </script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">


	<script>
$(document).ready(function() {
    $('#contact-detail').dataTable({
		"scrollX": true,
		"pagingType": "numbers",
        "processing": true,
        "serverSide": true,
        "ajax": "showcode.php"
    } );
} );
</script>

		<style>
		body {font-family: calibri;color:#4e7480;}
		</style>
	</head>
	<body>
	<div class="container">
		<table id="contact-detail" class="display nowrap" cellspacing="0" width="100%">
		<thead>
			<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Address</th>
			
			</tr>
		</thead>
		</table>
		</div>
	</body>
</html>