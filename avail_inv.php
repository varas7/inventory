<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Available Inventory</title>
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" media="screen" title="no title">
  <link rel="stylesheet" href="style.css" media="screen" title="no title">
  <script src="js/jquery-3.1.0.min.js"></script>
  <script src="css/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		    <div class="container" id="logo">
			    <a class='logo' href="owner_dashboard.php">Inventory Management System</a>
			    <h1>Available Inventory</h1>
		    </div>
		    <div class="box-section"><br>
	<table cellpadding="0" cellspacing="0" width="100%" >
		<thead>
                            <tr>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Category</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Expiry Date</th>
                                <td>&nbsp;</td>
                            </tr>
                        </thead>

                        <tbody>
<?php
	include 'configuration.php';
	if(!($dbconn = @mysql_connect($dbhost, $dbuser, $dbpass))) exit('Error connecting to database.');
	mysql_select_db($db);

	$ret = mysql_query("SELECT * FROM product");

	while ($row = mysql_fetch_array($ret)) {
	?>

		<tr>
			<td><?php echo $row[0];?></td>
			<td><?php echo $row[1];?></td>
			<td><?php echo $row[2];?></td>
			<td><?php echo $row[3];?></td>
			<td><?php echo $row[5];?></td>
			<td><?php echo $row[6];?></td>
		</tr>
	<?php
	}
?>
</tbody>
</table>
</div>
	</div>
	</body>
</html>