<html>
<head>
  <meta charset="utf-8">
  <title>Person Details</title>
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" media="screen" title="no title">
  <link rel="stylesheet" href="style.css" media="screen" title="no title">
  <script src="js/jquery-3.1.0.min.js"></script>
  <script src="css/bootstrap/js/bootstrap.min.js"></script>
</head>
<div class="container">
		<div class="container" id="logo">
	      	<a class='logo' href="#">Inventory Management System</a>
    	</div>
		<div class="box-section">
			<br><br>
<?php
	if (isset($_POST['submit'])) {
		include 'configuration.php';
		if(!($dbconn = @mysql_connect($dbhost, $dbuser, $dbpass))) exit('Error connecting to database.');
		mysql_select_db($db);

		$name = $_POST['full_name'];
		$username = $_POST['username'];
		$contact = $_POST['contact_no'];
		$address = $_POST['address'];



		$insert = "INSERT INTO person (name, username, contact_no, address, role) VALUES (' ".$name." ',' ".$username." ',' ".$contact." ',' ".$address." ','Employee')";
		$query = mysql_query($insert);
?>
		<div class = "progress progress-striped active">
					<div class = "progress-bar progress-bar-success" role = "progressbar" aria-valuenow = "60" aria-valuemin = "0" aria-valuemax = "100" style = "width: 40%;">
      
      				<span class = "sr-only">40% Complete</span>
   					</div>
				</div>
<?php

		echo "Returning back in 5 seconds..............";
		header("refresh:5;url=owner_dashboard.php");
	}
?>
</div>
	</div>
	</body>
</html>