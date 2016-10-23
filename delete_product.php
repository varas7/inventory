<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Remove Product</title>
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" media="screen" title="no title">
  <link rel="stylesheet" href="style.css" media="screen" title="no title">
  <script src="js/jquery-3.1.0.min.js"></script>
  <script src="css/bootstrap/js/bootstrap.min.js"></script>
</head>
	</body>
	<div class="container">
		<div class="container" id="logo">
	      	<a class='logo' href="index.php">Inventory Management System</a>
	      	<h1>Remove Employee</h1>
    	</div>
		<div class="box-section">
			<br><br>
<?php
	if( isset($_POST['submit']) ){
		include 'configuration.php';
		if(!($dbconn = @mysql_connect($dbhost, $dbuser, $dbpass))) exit('Error connecting to database.');
		mysql_select_db($db);

		$selprod=$_POST['prod'];


		$del = "DELETE FROM product WHERE product_name='".$selprod."'";
		$query = mysql_query($del);

		$del = "DELETE FROM mfg_company WHERE product_name='".$selprod."'";
		$query = mysql_query($del);

		$del = "DELETE FROM category WHERE product_name='".$selprod."'";
		$query = mysql_query($del);
?>
		<div class = "progress progress-striped active">
					<div class = "progress-bar progress-bar-success" role = "progressbar" aria-valuenow = "60" aria-valuemin = "0" aria-valuemax = "100" style = "width: 40%;">
      
      				<span class = "sr-only">40% Complete</span>
   					</div>
				</div>
<?php

		echo "Deleting the &nbsp" .$selprod. "&nbsp from the records";
		header("refresh:5;url=owner_dashboard.php");
	}
?>
</div>
	</div>
	</body>
</html>