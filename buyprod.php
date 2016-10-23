<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Add Product</title>
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" media="screen" title="no title">
  <link rel="stylesheet" href="style.css" media="screen" title="no title">
  <script src="js/jquery-3.1.0.min.js"></script>
  <script src="css/bootstrap/js/bootstrap.min.js"></script>
</head>
	</body>
	<div class="container">
		<div class="container" id="logo">
	      	<a class='logo' href="index.php">Inventory Management System</a>
	      	<h1>Add Product</h1>
    	</div>
		<div class="box-section">
			<br><br>
<?php
	if (isset($_POST['submit']))
	{
		include 'configuration.php';

		if(!($dbconn = @mysql_connect($dbhost, $dbuser, $dbpass))) exit('Error connecting to database.');
		mysql_select_db($db);

		$prodname = $_POST['product_name'];
		$category = $_POST['category'];
		$quantity = $_POST['qty'];
		$cp = $_POST['cp'];
		$sp = $_POST['sp'];
		$expdt = $_POST['exp_date'];
		$mfgco = $_POST['mfg_co'];

		$date = new DateTime();
		$ts = $date->getTimestamp();

		$insert = "INSERT INTO product (product_name, category, qty, cp, sp, exp_date, buy_ts) VALUES (' ".$prodname." ',' ".$category." ',' ".$quantity." ',' ".$cp." ',' ".$sp." ',' ".$expdt." ',' ".date('Y-m-d H:i:s',$ts)." ')";
		$query = mysql_query($insert);

		$insert = "INSERT INTO mfg_company (product_name, company) VALUES (' ".$prodname." ', ' ".$mfgco." ')";
		$query = mysql_query($insert);

		$insert = "INSERT INTO category (product_name, category) VALUES (' ".$prodname." ', ' ".$category." ')";
		$query = mysql_query($insert);

?>
	<div class = "progress progress-striped active">
					<div class = "progress-bar progress-bar-success" role = "progressbar" aria-valuenow = "60" aria-valuemin = "0" aria-valuemax = "100" style = "width: 40%;">
      
      				<span class = "sr-only">40% Complete</span>
   					</div>
				</div>
<?php
		echo "Product is being added to the inventory database...";
		header("refresh:5;url=add_product.php");
	}
?>
</div>
	</div>
	</body>
</html>