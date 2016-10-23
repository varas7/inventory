<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Product Details</title>
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" media="screen" title="no title">
  <link rel="stylesheet" href="style.css" media="screen" title="no title">
  <script src="js/jquery-3.1.0.min.js"></script>
  <script src="css/bootstrap/js/bootstrap.min.js"></script>
</head>
	</body>
	<div class="container">
		<div class="container" id="logo">
	      	<a class='logo' href="#">Inventory Management System</a>
	      	<h1>Product Details</h1>
    	</div>
		<div class="box-section">
			<br>
<?php
	if( isset($_POST['submit']) ){
		include 'configuration.php';
		if(!($dbconn = @mysql_connect($dbhost, $dbuser, $dbpass))) exit('Error connecting to database.');
		mysql_select_db($db);

		$selpro=$_POST['prod'];
		$p=explode(",", $selpro);
		$pid=$p[0];
		$pname=$p[1];

		$selectemp = mysql_query('SELECT * FROM product WHERE product_id='.$pid.'');
		$row = mysql_fetch_array($selectemp);

		echo "Product ID: &nbsp" .$row['product_id']."<br>";
		echo "Product Name: &nbsp".$row['product_name']."<br>";
		echo "Category: &nbsp".$row['category']."<br>";
		echo "Quantity: &nbsp".$row['qty']."<br>";
		echo "Cost Price: &nbsp".$row['cp']."<br>";
		echo "Selling Price: &nbsp".$row['sp']."<br>";
		echo "Expiry Date: &nbsp".$row['exp_date']."<br>";
	}
?>
</div><br>
	</div>
	</body>
</html>