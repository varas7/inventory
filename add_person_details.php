<?php
	if (isset($_POST['submit'])) {
		include 'configuration.php';
		if(!($dbconn = @mysql_connect($dbhost, $dbuser, $dbpass))) exit('Error connecting to database.');
		mysql_select_db($db);

		$name = $_POST['full_name'];
		$username = $_POST['username'];
		$contact = $_POST['contact_no'];
		$address = $_POST['address'];

		echo "Returning back in 5 seconds..............";
		header("refresh:5;url=owner_dashboard.php");

		$insert = "INSERT INTO person (name, username, contact_no, address) VALUES (' ".$name." ',' ".$username." ',' ".$contact." ',' ".$address." ')";
		$query = mysql_query($insert);
	}
?>