<!DOCTYPE html>


  <meta name="viewport" content="width=device-width, initial-scale=1">


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>













<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
    border-right:1px solid #bbb;
}

li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
</style>
</head>
<body>


<ul>
  <li><a  href="imshome.php">Home</a></li>
   <li><a   href="/test/imsProducts.php">Products</a></li>
  <li><a href="/test/imscustomers.php">Customers</a></li>
  <li><a href="/test/imssuppliers.php">Suppliers</a></li>
    <li><a href="/test/imsPorders.php">Purchase Orders</a></li>
      <li><a href="/test/imsSorders.php">Sales Orders</a></li>
         <li><a href="/test/imsCashCollection.php">Cash Collections</a></li>
          <li><a href="/test/imsCashDelivery.php">Cash Delivery</a></li>
        <li><a href="#contact">Expenses</a></li>
        <li><a href="#contact">Incomes</a></li>
        <li><a href="#contact">Expenditures</a></li>
  <li style="float:right"><a href="#about">About</a></li>
</ul>

 
  

</body>
</html>


 <script>
    $(document).ready(function() {
         //$('a[href="' + this.location.pathname + '"]').parent().parent().parent().addClass('active');
          //$('a[href="' + this.location.pathname + '"]').parent().addClass('active');
          $('a[href="' + this.location.pathname + '"]').addClass('active');
    });
</script>
