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

		echo "Returning back in 5 seconds..............";
		header("refresh:5;url=add_product.php");

		$date = new DateTime();
		$ts = $date->getTimestamp();

		$insert = "INSERT INTO product (product_name, category, qty, cp, sp, exp_date, buy_ts) VALUES (' ".$prodname." ',' ".$category." ',' ".$quantity." ',' ".$cp." ',' ".$sp." ',' ".$expdt." ',' ".date('Y-m-d H:i:s',$ts)." ')";
		$query = mysql_query($insert);

		$insert = "INSERT INTO mfg_company (product_name, company) VALUES (' ".$prodname." ', ' ".$mfgco." ')";
		$query = mysql_query($insert);

		$insert = "INSERT INTO category (product_name, category) VALUES (' ".$prodname." ', ' ".$category." ')";
		$query = mysql_query($insert);
	}
?>